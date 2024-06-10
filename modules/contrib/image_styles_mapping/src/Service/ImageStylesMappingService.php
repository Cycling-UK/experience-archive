<?php

declare(strict_types = 1);

namespace Drupal\image_styles_mapping\Service;

use Drupal\Core\Entity\EntityTypeBundleInfoInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Link;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\field_ui\FieldUI;
use Drupal\image_styles_mapping\Plugin\ImageStylesMappingPluginManager;

/**
 * Provides methods to render views fields.
 */
class ImageStylesMappingService implements ImageStylesMappingServiceInterface {

  use StringTranslationTrait;

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected ModuleHandlerInterface $moduleHandler;

  /**
   * The plugin manager for our text extractor.
   *
   * @var \Drupal\image_styles_mapping\Plugin\ImageStylesMappingPluginManager
   */
  protected ImageStylesMappingPluginManager $imageStylesMappingPluginManager;

  /**
   * Drupal\Core\Entity\EntityTypeManager definition.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  /**
   * An array of bundle information.
   *
   * @var array
   */
  protected array $bundleInfo;

  /**
   * Constructs an ImageStylesMappingService object.
   *
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \Drupal\image_styles_mapping\Plugin\ImageStylesMappingPluginManager $image_styles_mapping_plugin_manager
   *   The image styles mapping plugin manager.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Entity\EntityTypeBundleInfoInterface $entity_type_bundle_info
   *   The entity bundle info service.
   */
  public function __construct(
    ModuleHandlerInterface $module_handler,
    ImageStylesMappingPluginManager $image_styles_mapping_plugin_manager,
    EntityTypeManagerInterface $entity_type_manager,
    EntityTypeBundleInfoInterface $entity_type_bundle_info
  ) {
    $this->moduleHandler = $module_handler;
    $this->imageStylesMappingPluginManager = $image_styles_mapping_plugin_manager;
    $this->entityTypeManager = $entity_type_manager;
    $this->bundleInfo = $entity_type_bundle_info->getAllBundleInfo();
  }

  /**
   * {@inheritdoc}
   */
  public function fieldsReport() {
    // Get active image styles mapping plugins.
    $active_image_styles_mapping_plugins = $this->imageStylesMappingPluginManager->getActiveImageStylesMappingPlugins();

    $header = [
      ['data' => $this->t('Entity'), 'field' => 'entity_type'],
      ['data' => $this->t('Bundle machine name'), 'field' => 'bundle'],
      ['data' => $this->t('Bundle label'), 'field' => 'bundle_name'],
      ['data' => $this->t('View mode'), 'field' => 'view_mode'],
      ['data' => $this->t('Field'), 'field' => 'field'],
    ];

    // Add the plugins header.
    foreach ($active_image_styles_mapping_plugins as $plugin) {
      $header[] = $plugin->getHeader();
    }

    /** @var \Drupal\Core\Entity\Entity\EntityViewDisplay[] $entity_view_display_entities */
    $entity_view_display_entities = $this->entityTypeManager->getStorage('entity_view_display')->loadMultiple();

    $rows = [];
    foreach ($entity_view_display_entities as $entity_view_display_entity) {
      // Search for the image fields displayed in the view display.
      /** @var array $entity_view_display_entity_contents */
      $entity_view_display_entity_contents = $entity_view_display_entity->get('content');
      foreach ($entity_view_display_entity_contents as $field_name => $field_display) {
        if (isset($field_display['type'])
            && \in_array($field_display['type'], ['image', 'responsive_image'], TRUE)) {
          /** @var string $entity_type */
          $entity_type = $entity_view_display_entity->get('targetEntityType');
          /** @var string $bundle */
          $bundle = $entity_view_display_entity->get('bundle');
          /** @var string $view_mode */
          $view_mode = $entity_view_display_entity->get('mode');

          $row = [
            'entity_type' => $entity_type,
            'bundle' => $bundle,
            'bundle_name' => $this->bundleInfo[$entity_type][$bundle]['label'],
            'view_mode' => $this->displayViewModeLink($entity_type, $bundle, $view_mode),
            'field' => $field_name,
          ];

          // Add the plugins row data.
          foreach ($active_image_styles_mapping_plugins as $plugin) {
            $row[] = $plugin->getRowData($field_display);
          }

          $rows[] = $row;
        }
      }
    }

    return ['header' => $header, 'rows' => $rows];
  }

  /**
   * {@inheritdoc}
   */
  public function viewsFieldsReport() {
    // Get active image styles mapping plugins.
    $active_image_styles_mapping_plugins = $this->imageStylesMappingPluginManager->getActiveImageStylesMappingPlugins();

    // Get the views.
    /** @var \Drupal\views\Entity\View[] $views */
    $views = $this->entityTypeManager->getStorage('view')->loadMultiple();

    $header = [
      ['data' => $this->t('View'), 'field' => 'view'],
      ['data' => $this->t('View display'), 'field' => 'view_display'],
      ['data' => $this->t('Field'), 'field' => 'field'],
    ];

    // Add the plugins header.
    foreach ($active_image_styles_mapping_plugins as $plugin) {
      $header[] = $plugin->getHeader();
    }

    $rows = [];
    // Fetch all fields which are used in views.
    // Therefore search in all views, displays and handler-types.
    foreach ($views as $view) {
      /** @var array $view_displays */
      $view_displays = $view->get('display');
      foreach ($view_displays as $display_id => $display) {
        // Display with fields.
        if (isset($display['display_options']['fields'])) {
          foreach ($display['display_options']['fields'] as $field_machine_name => $field) {
            // Image field.
            if ($this->fieldIsImageField($field_machine_name)) {
              /** @var string $view_id */
              $view_id = $view->get('id');
              $row = [
                'view' => $view->get('label'),
                'view_display' => $this->viewDisplayLink($view_id, $display_id, $display['display_title']),
                'field' => $field_machine_name,
              ];

              // Add the plugins row data.
              foreach ($active_image_styles_mapping_plugins as $plugin) {
                $row[] = $plugin->getRowData($field['settings']);
              }

              $rows[] = $row;
            }
          }
        }
      }
    }

    return ['header' => $header, 'rows' => $rows];
  }

  /**
   * Helper function to get the image fields.
   *
   * @return array
   *   An array of image fields name.
   */
  public function getImageFields() {
    /** @var array|null $image_fields */
    $image_fields = &\drupal_static(__FUNCTION__);

    if (!isset($image_fields)) {
      /** @var \Drupal\field\Entity\FieldConfig[] $field_instance_config_entities */
      $field_instance_config_entities = $this->entityTypeManager->getStorage('field_config')->loadMultiple();

      $image_fields = [];
      foreach ($field_instance_config_entities as $field_instance_config_entity) {
        // Restrict to image fields.
        if ($field_instance_config_entity->get('field_type') == 'image') {
          $field_name = $field_instance_config_entity->get('field_name');

          // Check if we already have this field.
          if (!\in_array($field_name, $image_fields, TRUE)) {
            $image_fields[] = $field_name;
          }
        }
      }
    }

    return $image_fields;
  }

  /**
   * Check if a field_machine_name corresponds to an image field machine name.
   *
   * Used because if the same field is used twice (or more) in a view, the
   * second field machine name will be field_image_1.
   *
   * @param string $field_name
   *   The field's name to check.
   *
   * @return bool
   *   TRUE if the field's name is among the image fields.
   *   FALSE otherwise.
   */
  protected function fieldIsImageField($field_name) {
    $image_fields = $this->getImageFields();
    $check = FALSE;

    // Check if an image field is used.
    foreach ($image_fields as $image_field) {
      $pattern = '/^' . $image_field . '(_([\d])+)?$/';
      if (\preg_match($pattern, $field_name)) {
        $check = TRUE;
        break;
      }
    }

    return $check;
  }

  /**
   * Display a link to bundle's view mode page if user has permission.
   *
   * @param string $entity_type
   *   The type of the entity.
   * @param string $bundle
   *   The bundle of the entity.
   * @param string $view_mode
   *   A view mode.
   *
   * @return string|\Drupal\Core\GeneratedLink
   *   A link to the view mode of the bundle if user has access.
   *   The view mode otherwise.
   */
  protected function displayViewModeLink($entity_type, $bundle, $view_mode = 'default') {
    $display = $view_mode;

    // Get entity type object from entity type name.
    $entity_type_object = $this->entityTypeManager->getDefinition($entity_type);

    if ($entity_type_object === NULL) {
      return $display;
    }

    // Prepare URL parameters.
    $parameters = [
      'view_mode_name' => $view_mode,
    ];
    $parameters += FieldUI::getRouteBundleParameter($entity_type_object, $bundle);

    // Route.
    if ($view_mode == 'default') {
      $route = "entity.entity_view_display.{$entity_type}.default";
    }
    else {
      $route = "entity.entity_view_display.{$entity_type}.view_mode";
    }

    $url = Url::fromRoute($route, $parameters);
    if ($url->access()) {
      $display = Link::fromTextAndUrl($view_mode, $url)->toString();
    }

    return $display;
  }

  /**
   * Display a link to view display edit page if user has permission.
   *
   * @param string $view_id
   *   A view ID.
   * @param string $display_id
   *   A view display ID.
   * @param string $display_title
   *   The title of the view display.
   *
   * @return string|\Drupal\Core\GeneratedLink
   *   A link to the view display if user has access.
   *   The display title otherwise.
   */
  protected function viewDisplayLink($view_id, $display_id, $display_title) {
    if ($this->moduleHandler->moduleExists('views_ui')) {
      // Prepare link.
      if ($display_title == 'Master') {
        $url = Url::fromRoute('entity.view.edit_form', ['view' => $view_id]);
      }
      else {
        $url = Url::fromRoute(
          'entity.view.edit_display_form',
          [
            'view' => $view_id,
            'display_id' => $display_id,
          ]
        );
      }

      // Use the routing system to check access.
      if ($url->access()) {
        return Link::fromTextAndUrl($display_title, $url)->toString();
      }

      return $display_title;
    }

    return $display_title;
  }

}
