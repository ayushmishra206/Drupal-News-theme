<?php

namespace Drupal\layout_builder_ibqe\EventSubscriber;

use Drupal\block_content\BlockContentInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\layout_builder\EventSubscriber\SetInlineBlockDependency as BaseSetInlineBlockDependency;

/**
 * An subscriber that replaces the layout builder SetInlineBlockDependency.
 *
 * @see \Drupal\layout_builder\EventSubscriber\SetInlineBlockDependency
 */
class SetInlineBlockDependency extends BaseSetInlineBlockDependency {

  /**
   * Checks if revision id is used in entity.
   *
   * Checks either:
   * - if a block content revision is used in an entity
   * or
   * - if it is the latest revision id.
   *
   * @param \Drupal\Core\Entity\EntityInterface $layout_entity
   *   The layout entity.
   * @param \Drupal\block_content\BlockContentInterface $block_content
   *   The block content revision.
   *
   * @return bool
   *   TRUE if the block content revision is used as an inline block in the
   *   layout entity.
   */
  protected function isBlockRevisionUsedInEntity(EntityInterface $layout_entity, BlockContentInterface $block_content) {

    if ($block_content->isNewRevision()) {
      $block_revision_id = $block_content->getLoadedRevisionId();
    }
    else {
      $block_revision_id = $block_content->getRevisionId();
    }
    /** @var \Drupal\layout_builder_ibqe\BlockRevisionHelperInterface $helper */
    $sections_blocks_revision_ids = $this->getInlineBlockRevisionIdsInSections($this->getEntitySections($layout_entity));
    $helper = \Drupal::service('layout_builder_ibqe.block_revision_helper');
    $sections_blocks_revision_ids = array_unique(array_merge($helper->getLatestBlockRevisionIds($layout_entity), $sections_blocks_revision_ids));
    return in_array($block_revision_id, $sections_blocks_revision_ids);
  }

}
