<?php

declare(strict_types = 1);

namespace Drupal\image_styles_mapping\Plugin;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Plugin\PluginBase;
use Drupal\Core\Render\RendererInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Base class for plugins able to add columns on image styles mapping reports.
 *
 * @ingroup plugin_api
 */
abstract class ImageStylesMappingPluginBase extends PluginBase implements ContainerFactoryPluginInterface, ImageStylesMappingPluginInterface {

  /**
   * Entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  /**
   * Renderer service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected RendererInterface $renderer;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition, EntityTypeManagerInterface $entity_type_manager, RendererInterface $renderer) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->entityTypeManager = $entity_type_manager;
    $this->renderer = $renderer;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    // @phpstan-ignore-next-line
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager'),
      $container->get('renderer')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(): array {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getHeader() {
    return '';
  }

  /**
   * {@inheritdoc}
   */
  public function getRowData(array $field_settings) {
    return new FormattableMarkup('', []);
  }

  /**
   * {@inheritdoc}
   */
  public function calculateDependencies(): array {
    return [];
  }

  /**
   * Helper function.
   *
   * Checks if a value is used in an array.
   *
   * @param string $needle
   *   The value searched.
   * @param array $haystack
   *   The array in which the value is searched.
   * @param bool $result
   *   If the needle has been found.
   */
  protected function recursiveSearch($needle, array $haystack, &$result): void {
    if (!\is_array($haystack)) {
      return;
    }

    foreach ($haystack as $value) {
      if (\is_array($value)) {
        $this->recursiveSearch($needle, $value, $result);
      }
      elseif ($needle === $value) {
        $result = TRUE;
      }
    }
  }

}
