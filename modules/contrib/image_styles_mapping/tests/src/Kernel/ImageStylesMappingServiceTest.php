<?php

declare(strict_types = 1);

namespace Drupal\Tests\image_styles_mapping\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the image styles mapping service.
 *
 * @group image_styles_mapping
 */
class ImageStylesMappingServiceTest extends KernelTestBase {

  /**
   * The image styles mapping service.
   *
   * @var \Drupal\image_styles_mapping\Plugin\ImageStylesMappingPluginManager
   */
  protected $imageStylesMappingPluginManager;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'image_styles_mapping',
    'responsive_image',
    'image',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->imageStylesMappingPluginManager = $this->container->get('plugin.manager.image_styles_mapping.image_styles_mapping');
  }

  /**
   * Verifies the value returned by the function getImageStyles.
   */
  public function testActivePlugins(): void {
    // Get active image styles mapping plugins.
    $active_plugins = $this->imageStylesMappingPluginManager->getActiveImageStylesMappingPlugins();
    $active_plugin_ids = \array_keys($active_plugins);

    // Expected image styles.
    $expected_plugin_ids = [
      'image_styles',
      'responsive_image_styles',
    ];

    // Sort arrays to avoid failing test with DrupalCI.
    \sort($active_plugin_ids);
    \sort($expected_plugin_ids);

    $this->assertEquals($active_plugin_ids, $expected_plugin_ids, 'The expected plugins are active.');
  }

}
