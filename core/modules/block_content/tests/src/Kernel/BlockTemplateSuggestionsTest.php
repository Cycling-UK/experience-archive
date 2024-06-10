<?php

namespace Drupal\Tests\block_content\Kernel;

use Drupal\block\Entity\Block;
use Drupal\KernelTests\KernelTestBase;
use Drupal\block_content\Entity\BlockContent;
use Drupal\block_content\Entity\BlockContentType;

/**
 * Tests the block_content_theme_suggestions_block() function.
 *
 * @group block
 */
class BlockTemplateSuggestionsTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'user',
    'block',
    'block_content',
    'system',
  ];

  /**
   * The BlockContent entity used for testing.
   *
   * @var \Drupal\block_content\Entity\BlockContent
   */
  protected $blockEntity;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->installEntitySchema('block_content');

    // Create a block content type.
    $block_content_type = BlockContentType::create([
      'id' => 'test_block',
      'label' => 'A test block type',
      'description' => "Provides a test block type.",
    ]);
    $block_content_type->save();

    $this->blockEntity = BlockContent::create([
      'info' => 'The Test Block',
      'type' => 'test_block',
    ]);
    $this->blockEntity->save();
  }

  /**
   * Tests template suggestions from block_content_theme_suggestions_block().
   */
  public function testBlockThemeHookSuggestions() {
    // Create a block using a block_content plugin.
    $block = Block::create([
      'plugin' => 'block_content',
      'region' => 'footer',
      'id' => 'machinename',
    ]);
    $block->save();

    $variables['elements']['#id'] = $block->id();
    $variables['elements']['#configuration']['provider'] = 'block_content';
    $variables['elements']['#configuration']['view_mode'] = 'full';
    $variables['elements']['content']['#block_content'] = $this->blockEntity;
    $suggestions = block_content_theme_suggestions_block($variables);

    $this->assertSame([
      'block__block_content__full',
      'block__block_content__test_block',
      'block__block_content__test_block__full',
      'block__block_content__machinename',
      'block__block_content__machinename__full',
    ], $suggestions);
  }

}
