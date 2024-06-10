<?php

namespace Drupal\Tests\builder_notes\Functional;

use Drupal\Core\Config\Entity\ConfigEntityInterface;
use Drupal\image\Entity\ImageStyle;
use Drupal\responsive_image\Entity\ResponsiveImageStyle;
use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\field_ui\Traits\FieldUiTestTrait;
use Drupal\Tests\node\Traits\ContentTypeCreationTrait;
use Drupal\Tests\user\Traits\UserCreationTrait;

/**
 * Tests builder expected_notes functionality.
 *
 * @group builder_notes
 */
class BuilderNotesTest extends BrowserTestBase {

  use ContentTypeCreationTrait;
  use FieldUiTestTrait;
  use UserCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'node',
    'filter',
    'options',
    'builder_notes',
    'field',
    'block',
    'text',
    'field_ui',
    'image',
    'responsive_image',
    'responsive_image_test_module',
  ];

  protected $defaultTheme = 'stark';

  public function testBuilderNotesUI() {
    $this->placeBlock('system_breadcrumb_block');
    $this->drupalLogin($this->drupalCreateUser([
      'administer content types',
      'administer nodes',
      'administer node form display',
      'administer node display',
      'administer node fields',
      'access administration pages',
      'view the administration theme',
      'administer permissions',
      'administer image styles',
      'administer responsive images',
    ]));
    $this->createContentType(['type' => 'page']);
    $this->createRole([], 'editors', 'Editors');
    $this->drupalGet('admin/structure/types/manage/page');
    $notes = 'I am going to use this content type for pages';
    $this->assertNotesField($notes, 'Save content type', 'admin/structure/types/manage/page');
    $entityTypeManager = $this->container->get('entity_type.manager');
    $node_type = $entityTypeManager->getStorage('node_type')->load('page');
    $this->assertNotesSaved($notes, $node_type);

    $this->drupalGet('admin/structure/types/manage/page/display');
    $notes = 'I am going to use the default display in the search results';
    $this->assertNotesField($notes);
    $this->drupalGet('admin/structure/types/manage/page/form-display');
    $this->assertNotesField($notes);
    /** @var \Drupal\Core\Entity\Entity\EntityFormDisplay $form_display */
    $form_display = $entityTypeManager->getStorage('entity_form_display')->load('node.page.default');
    $this->assertNotesSaved($notes, $form_display);
    /** @var \Drupal\Core\Entity\Entity\EntityViewDisplay $view_display */
    $view_display = $entityTypeManager->getStorage('entity_view_display')->load('node.page.default');
    $this->assertNotesSaved($notes, $view_display);
    $storage_notes = 'This field is used for the subtitle';
    $field_notes = 'This field is not to be reused';
    $this->fieldUIAddNewField('admin/structure/types/manage/page', 'text',  'Text', 'text', [
      'builder_notes' => $storage_notes,
    ], [
      'builder_notes' => $field_notes,
    ]);
    $storage = $entityTypeManager->getStorage('field_storage_config')->load('node.field_text');
    $this->assertNotesSaved($storage_notes, $storage);
    $field = $entityTypeManager->getStorage('field_config')->load('node.page.field_text');
    $this->assertNotesSaved($field_notes, $field);
    $roleStorage = $entityTypeManager->getStorage('user_role');
    $this->drupalGet($roleStorage->load('editors')->toUrl('edit-form'));
    $this->assertNotesField($notes, 'Save', $roleStorage->load('editors')->toUrl('edit-form'));
    $role = $roleStorage->loadUnchanged('editors');
    $this->assertNotesSaved($notes, $role);

    $this->drupalGet(ImageStyle::load('large')->toUrl());
    $notes = 'I am going to use this image style for carousels like its 2005';
    $this->assertNotesField($notes);
    $this->assertNotesSaved($notes, ImageStyle::load('large'));

    $style = ResponsiveImageStyle::create([
      'id' => 'style_one',
      'label' => 'Style One',
      'breakpoint_group' => 'responsive_image_test_module',
      'fallback_image_style' => 'large',
    ]);
    $style->save();
    $this->drupalGet($style->toUrl('edit-form'));
    $notes = 'I am going to use this responsive image to serve the best image';
    $this->assertNotesField($notes);
    $this->assertNotesSaved($notes, ResponsiveImageStyle::load('style_one'));
  }

  /**
   * Assert that expected_notes field works.
   *
   * @param string $notes
   *   Notes to use.
   * @param string $button_text
   *   Button text.
   * @param string|NULL $redirect
   *   Redirect path.
   */
  protected function assertNotesField($notes, $button_text = 'Save', $redirect_path = NULL) {
    $assert = $this->assertSession();
    $field_name = 'builder_notes';
    $assert->fieldExists($field_name);
    $this->submitForm([
      $field_name => $notes,
    ], $button_text);
    $assert->statusCodeEquals(200);
    if ($redirect_path) {
      $this->drupalGet($redirect_path);
    }
    $assert->fieldValueEquals($field_name, $notes);
  }

  /**
   * Assert display expected_notes were saved.
   *
   * @param string $expected_notes
   *   Expected note.
   * @param \Drupal\Core\Config\Entity\ConfigEntityInterface $entity
   *   Entity on which expected_notes should be present.
   */
  protected function assertNotesSaved($expected_notes, ConfigEntityInterface $entity) {
    $this->assertEquals($expected_notes, $entity->getThirdPartySetting('builder_notes', 'notes'));
  }

}
