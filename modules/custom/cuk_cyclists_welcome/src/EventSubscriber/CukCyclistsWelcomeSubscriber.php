<?php

namespace Drupal\cuk_cyclists_welcome\EventSubscriber;

use Drupal\Core\Entity\EntityTypeManager;
use Drupal\cycling_uk_application_process\Event\ApplicationStatusChanged;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Cyclists Welcome event subscriber.
 */
class CukCyclistsWelcomeSubscriber implements EventSubscriberInterface {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManager;
   */
  protected EntityTypeManager $entityTypeManager;

  /**
   * Constructs event subscriber.
   *
   * @param \Drupal\Core\Entity\EntityTypeManager $entity_type_manager
   *   The entity type manager.
   */
  public function __construct(EntityTypeManager $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Application status changed event handler.
   *
   * @param \Drupal\cycling_uk_application_process\Event\ApplicationStatusChanged $event
   *   Application status changed event.
   */
  public function onApplicationStatusChanged(ApplicationStatusChanged $event) {
    $application = $event->applicationProcess;
    $applicationType = $application->getApplicationType();
    $createPoi = TRUE;
    if ($applicationType->hasField('field_create_poi')) {
      $createPoi = (bool) $applicationType->get('field_create_poi')->value;
    }
    if ($application->isQualified() && $createPoi) {
      $nodeStorage = $this->entityTypeManager->getStorage('node');
      $poi = $nodeStorage->create(['type' => 'point_of_interest']);
      $webformSubmission = $event->applicationProcess->getWebformSubmission();
      $name = $webformSubmission->getElementData('business_trading_as');
      $email = $webformSubmission->getElementData('website_public_email');
      $phone = $webformSubmission->getElementData('website_public_telephone');
      $website = $webformSubmission->getElementData('general_website');
      $facebook = $webformSubmission->getElementData('general_facebook');
      $twitter = $webformSubmission->getElementData('general_twiter');
      $instagram = $webformSubmission->getElementData('general_instagram');
      $address1 = $webformSubmission->getElementData('address_line_1');
      $address2 = $webformSubmission->getElementData('address_line_2');
      $town = $webformSubmission->getElementData('address_town');
      $county = $webformSubmission->getElementData('county');
      $postcode = $webformSubmission->getElementData('address_postcode');
      $locationDifferent = $webformSubmission->getElementData('website_location_different_to_organisation_address');
      $poi->set('title', $name)
        ->set('field_email', $email)
        ->set('field_telephone', $phone)
        ->set('field_website', $website)
        ->set('field_twitter', $twitter)
        ->set('field_facebook', $facebook)
        ->set('field_instagram', $instagram);
      if (!$locationDifferent) {
        $poi->set('field_address', [
          'address_line1' => $address1,
          'address_line2' => $address2,
          'locality' => $town,
          'administrative_area' => $county,
          'postal_code' => $postcode,
          'country_code' => 'GB',
        ]);
      }
      $poi->save();
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [
      ApplicationStatusChanged::EVENT_NAME => ['onApplicationStatusChanged'],
    ];
  }

}
