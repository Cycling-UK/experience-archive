<?php

namespace Drupal\cycling_uk_dynamics\Plugin\Dynamics\Process;

use Drupal\cycling_uk_dynamics\Plugin\ProcessPluginInterface;

/**
 * Map Drupal Webform Number field to Dynamics Decimal property.
 *
 * @ProcessPluginAnnotation(
 *   id = "NumberToDecimal",
 *   map_from = "number",
 *   map_to = "Decimal",
 *   label = @Translation("Map Drupal Webform Number field to Dynamics Decimal property"),
 * )
 */
class NumberToDecimal implements ProcessPluginInterface {
  /**
   * Data to be transformed.
   *
   * @var mixed
   */
  protected $data;

  /**
   * {@inheritdoc}
   */
  public function setSource($source) {
    $this->data = $source;
  }

  /**
   * {@inheritdoc}
   */
  public function getDestination() {
    if (!empty($this->data)) {
      return $this->data;
    }
  }

}
