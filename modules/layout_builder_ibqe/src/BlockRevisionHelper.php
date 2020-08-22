<?php

namespace Drupal\layout_builder_ibqe;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\layout_builder\InlineBlockUsageInterface;
use Drupal\layout_builder\LayoutEntityHelperTrait;

/**
 * Helper class to get latest  revision ids.
 */
class BlockRevisionHelper implements BlockRevisionHelperInterface {

  /**
   * The block storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $blockStorage;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The database.
   *
   * @var \Drupal\layout_builder\InlineBlockUsageInterface
   */
  protected $inlineBlockUsage;

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  use LayoutEntityHelperTrait;

  /**
   * Constructs a new BlockRevisionHelper object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\layout_builder\InlineBlockUsageInterface $inline_block_usage
   *   The inline block usage manager.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, InlineBlockUsageInterface $inline_block_usage, ModuleHandlerInterface $module_handler) {
    $this->entityTypeManager = $entity_type_manager;
    $this->inlineBlockUsage = $inline_block_usage;
    $this->moduleHandler = $module_handler;

    $this->blockStorage = $entity_type_manager->getStorage('block_content');

  }

  /**
   * {@inheritdoc}
   */
  public function getLatestBlockRevisionIds(EntityInterface $entity) {
    $sections = $this->getEntitySections($entity);
    $ids = [];
    foreach ($sections as $section) {
      $components = $section->getComponents();
      foreach ($components as $component) {
        $component_ary = $component->toArray();
        $config = isset($component_ary['configuration']) ? $component_ary['configuration'] : [];
        if (isset($config['block_revision_id'])) {
          $block = $this->blockStorage->loadRevision($config['block_revision_id']);
          $last_revision_id = $this->blockStorage->getLatestRevisionId($block->id());
          $ids[] = (string) $last_revision_id;
        }
      }
    }
    return $ids;
  }

  /**
   * {@inheritdoc}
   */
  public function updateBlockRevisionIds(EntityInterface $entity) {
    if (!$this->entityModerated($entity)) {
      return;
    }
    $sections = $this->getEntitySections($entity);
    foreach ($sections as $section) {
      $components = $section->getComponents();
      foreach ($components as $component) {
        $component_ary = $component->toArray();
        $config = isset($component_ary['configuration']) ? $component_ary['configuration'] : [];
        if (isset($config['block_revision_id'])) {
          $block = $this->blockStorage->loadRevision($config['block_revision_id']);
          $last_revision_id = $this->blockStorage->getLatestRevisionId($block->id());
          $config['block_revision_id'] = (string) $last_revision_id;
          $component->setConfiguration($config);
        }
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function entityModerated(EntityInterface $entity) {
    if ($this->moduleHandler->moduleExists('content_moderation')) {
      $information = \Drupal::service('content_moderation.moderation_information');
      return $information->isModeratedEntity($entity);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function needsBlockNewRevision($block_content_id, $block_content_revision_id) {
    $usage = $this->inlineBlockUsage->getUsage($block_content_id);

    if ($usage !== NULL) {
      /** @var \Drupal\Core\Entity\RevisionableStorageInterface $storage */
      $storage = $this->entityTypeManager->getStorage($usage->layout_entity_type);
      /** @var \Drupal\Core\Entity\RevisionableStorageInterface $block_storage */
      $layout_entity = $storage->load($usage->layout_entity_id);
      if (!$this->entityModerated($layout_entity)) {
        return FALSE;
      }

      if ($layout_entity instanceof EntityPublishedInterface && !$layout_entity->isPublished()) {
        return FALSE;
      }
      $revision_ids = $this->getInlineBlockRevisionIdsInSections($this->getEntitySections($layout_entity));
      return in_array($block_content_revision_id, $revision_ids);
    }
  }

}
