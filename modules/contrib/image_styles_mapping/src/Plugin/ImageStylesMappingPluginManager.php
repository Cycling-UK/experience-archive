<?php

declare(strict_types = 1);

namespace Drupal\image_styles_mapping\Plugin;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Base class for image styles mapping plugin managers.
 *
 * @ingroup plugin_api
 */
class ImageStylesMappingPluginManager extends DefaultPluginManager {

  /**
   * {@inheritdoc}
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/ImageStylesMapping', $namespaces, $module_handler, 'Drupal\image_styles_mapping\Plugin\ImageStylesMappingPluginInterface', 'Drupal\image_styles_mapping\Annotation\ImageStylesMapping');
    $this->alterInfo('image_styles_mapping_info');
    $this->setCacheBackend($cache_backend, 'image_styles_mapping_plugins');
  }

  /**
   * Get the image styles mapping plugin which dependencies are enabled.
   *
   * @return \Drupal\image_styles_mapping\Plugin\ImageStylesMappingPluginInterface[]
   *   The active plugins list.
   */
  public function getActiveImageStylesMappingPlugins(): array {
    $active_image_styles_mapping_plugins = [];

    // Get the plugins.
    $image_styles_mapping_plugins_definitions = $this->getDefinitions();
    foreach (\array_keys($image_styles_mapping_plugins_definitions) as $plugin_id) {
      $dependencies = TRUE;
      // Instantiate the plugin.
      /** @var \Drupal\image_styles_mapping\Plugin\ImageStylesMappingPluginInterface $plugin */
      $plugin = $this->createInstance($plugin_id, []);
      // Check dependencies.
      foreach ($plugin->getDependencies() as $module_name) {
        if (!$this->moduleHandler->moduleExists($module_name)) {
          $dependencies = FALSE;
          break;
        }
      }

      // Add the plugin if all dependencies are satisfied.
      if ($dependencies) {
        $active_image_styles_mapping_plugins[$plugin_id] = $plugin;
      }
    }

    return $active_image_styles_mapping_plugins;
  }

}
