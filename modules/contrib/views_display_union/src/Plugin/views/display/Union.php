<?php

namespace Drupal\views_display_union\Plugin\views\display;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\display\DisplayPluginBase;

/**
 * The plugin that handles a union display.
 *
 * A union is used to combine ("or") the results of multiple Views sub-queries
 * into a single result set, which is then displayed by a master page.
 *
 * @ingroup views_display_plugins
 *
 * @ViewsDisplay(
 *   id = "union",
 *   title = @Translation("Union"),
 *   help = @Translation("Combine multiple Views sub-queries into a single result set."),
 *   theme = "views_view",
 *   contextual_links_locations = {""}
 * )
 */
class Union extends DisplayPluginBase {

  /**
   * {@inheritdoc}
   */
  protected $usesOptions = FALSE;

  /**
   * {@inheritdoc}
   */
  protected $usesPager = FALSE;

  /**
   * {@inheritdoc}
   */
  protected $usesMore = FALSE;

  /**
   * {@inheritdoc}
   */
  protected $usesAreas = FALSE;

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    $options['displays'] = ['default' => []];

    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function optionsSummary(&$categories, &$options) {
    parent::optionsSummary($categories, $options);

    $displays = array_filter($this->getOption('displays'));
    if (count($displays) > 1) {
      $attach_to = $this->t('Multiple displays');
    }
    elseif (count($displays) == 1) {
      $display = array_shift($displays);
      if ($display = $this->view->storage->getDisplay($display)) {
        $attach_to = $display['display_title'];
      }
    }

    if (!isset($attach_to)) {
      $attach_to = $this->t('Not defined');
    }

    $options['displays'] = [
      'category' => 'attachment',
      'title' => $this->t('Attach to'),
      'value' => $attach_to,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    switch ($form_state->get('section')) {
      case 'displays':
        $form['#title'] .= $this->t('Attach to');
        $displays = [];
        foreach ($this->view->storage->get('display') as $display_id => $display) {
          if ($display_id != $this->display['id']) {
            $displays[$display_id] = $display['display_title'];
          }
        }
        $form['displays'] = [
          '#title' => $this->t('Displays'),
          '#type' => 'checkboxes',
          '#description' => $this->t('Select which display or displays this should attach to.'),
          '#options' => array_map('\Drupal\Component\Utility\Html::escape', $displays),
          '#default_value' => $this->getOption('displays'),
        ];
        break;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitOptionsForm(&$form, FormStateInterface $form_state) {
    parent::submitOptionsForm($form, $form_state);
    $section = $form_state->get('section');
    switch ($section) {
      case 'displays':
        $form_state->setValue($section, array_filter($form_state->getValue($section)));
        $this->setOption($section, $form_state->getValue($section));
        break;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function usesExposed() {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function displaysExposed() {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function renderPager() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function execute() {
  }

  /**
   * {@inheritdoc}
   */
  public function validate() {
    $errors = parent::validate();

    foreach ($this->getOption('displays') as $main_display_name) {
      $main_display = $this->view->displayHandlers->get($main_display_name);
      if (!$main_display) {
        continue;
      }
      $errmsg_args = [
        '%union' => $this->display['display_title'],
        '%main' => $main_display->display['display_title'],
      ];
      $errmsg = $this->t('The union %union does not have the same fields, in the same order, as the main display %main to which it is attached.', $errmsg_args);
      if ($this->usesFields() != $main_display->usesFields()) {
        $errors[] = $errmsg;
      }
      else {
        $main_fields = $main_display->getHandlers('field');
        $this_fields = $this->getHandlers('field');
        if (count($main_fields) != count($this_fields)) {
          $errors[] = $errmsg;
        }
        else {
          reset($main_fields);
          foreach ($this_fields as $this_field) {
            $main_field = current($main_fields);
            if (!empty($this_field->definition['entity_type']) && !empty($main_field->definition['entity_type']) && $this_field->definition['entity_type'] != $main_field->definition['entity_type'] || $this_field->field != $main_field->field) {
              $errors[] = $errmsg;
              break;
            }
            next($main_fields);
          }
        }
      }

      $errmsg = $this->t('The union %union does not have the same contextual filters, in the same order, as the main display %main to which it is attached.', $errmsg_args);
      $main_args = $main_display->getHandlers('argument');
      $this_args = $this->getHandlers('argument');
      if (count($main_args) != count($this_args)) {
        $errors[] = $errmsg;
      }
      else {
        reset($main_args);
        foreach ($this_args as $this_arg) {
          $main_arg = current($main_args);
          if (isset($this_arg->definition['entity_type']) && isset($main_arg->definition['entity_type']) && $this_arg->definition['entity_type'] != $main_arg->definition['entity_type']) {
            $errors[] = $errmsg;
            break;
          }
          next($main_args);
        }
      }
    }

    return $errors;
  }

}
