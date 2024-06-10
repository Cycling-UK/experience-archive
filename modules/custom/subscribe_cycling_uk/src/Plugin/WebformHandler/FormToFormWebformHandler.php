<?php

namespace Drupal\subscribe_cycling_uk\Plugin\WebformHandler;

use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;
use Drupal\webform\Entity\WebformSubmission;
use Symfony\Component\HttpFoundation\Cookie;

/**
 * Create a new node entity from a webform submission.
 *
 * @WebformHandler(
 *   id = "Subscribe fields to cookies",
 *   label = @Translation("Subscribe fields to cookies"),
 *   category = @Translation("Subscribe fields to cookies"),
 *   description = @Translation("Places cookies for the subscribe to cycling uk block webform field values"),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_REQUIRED,
 * )
 */

class FormToFormWebformHandler extends WebformHandlerBase
{
    /**
     * {@inheritdoc}
     */

    // Function to be fired after submitting the Webform.
    public function postSave(
        WebformSubmissionInterface $webform_submission,
        $update = true
    ) {
        $values = $webform_submission->getData();
        $c_uk_fn = $values['first_name'];
        $c_uk_ln = $values['last_name'];
        $c_uk_em = $values['email'];

        //setcookie(name,value,expire,path,domain,secure,httponly);

        // Setting a cookie
        // setcookie("c_uk_fn", $c_uk_fn);
        // setcookie("c_uk_ln", $c_uk_ln);
        // setcookie("c_uk_em", $c_uk_em);
        if (isset($_COOKIE['c_uk_fn'])) {
            unset($_COOKIE['c_uk_fn']);
            setcookie("c_uk_fn", $c_uk_fn);
        } else {
            setcookie("c_uk_fn", $c_uk_fn);
        }

        if (isset($_COOKIE['c_uk_ln'])) {
            unset($_COOKIE['c_uk_ln']);
            setcookie("c_uk_ln", $c_uk_ln);
        } else {
            setcookie("c_uk_ln", $c_uk_ln);
        }

        if (isset($_COOKIE['c_uk_em'])) {
            unset($_COOKIE['c_uk_em']);
            setcookie("c_uk_em", $c_uk_em);
        } else {
            setcookie("c_uk_em", $c_uk_em);
        }
    }
}
