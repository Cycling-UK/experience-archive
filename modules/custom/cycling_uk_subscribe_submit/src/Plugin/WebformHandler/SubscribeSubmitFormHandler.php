<?php
namespace Drupal\cycling_uk_subscribe_submit\Plugin\WebformHandler;

use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;
use Drupal\webform\Entity\WebformSubmission;
use Drupal\node\Entity\Node;
use Drupal\media\Entity\Media;
use Drupal\file\Entity\File;
use Symfony\Component\HttpFoundation\Cookie;


/**
 * Form submission handler.
 *
 * @WebformHandler(
 *   id = "Cycling UK full subscribe submit form handler",
 *   label = @Translation("Cycling UK full subscribe submit form handler"),
 *   category = @Translation("Form Handler"),
 *   description = @Translation("Unset subscription cookies on submit"),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_SINGLE,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 * )
 */
class SubscribeSubmitFormHandler extends WebformHandlerBase {

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state, WebformSubmissionInterface $webform_submission) {
       //setcookie("c_uk_fn",  time() - 3600);
       //setcookie("c_uk_ln", time() - 3600);
       //setcookie("c_uk_em", time() - 3600);

      if (isset($_COOKIE['c_uk_fn'])) {
        unset($_COOKIE['c_uk_fn']);
        setcookie('c_uk_fn', '');
      };

      if (isset($_COOKIE['c_uk_ln'])) {
        unset($_COOKIE['c_uk_ln']);
        setcookie('c_uk_ln', '');
      };

      if (isset($_COOKIE['c_uk_em'])) {
        unset($_COOKIE['c_uk_em']);
        setcookie('c_uk_em', '');
      }; 


 }
}   