<?php

namespace Drupal\layout_builder_ibqe;

use Drupal\Core\Entity\EntityInterface;

/**
 * Defines an interface to get latest block revisions.
 */
interface BlockRevisionHelperInterface {

  /**
   * Update layout sections for layout sections.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The layout entity.
   */
  public function updateBlockRevisionIds(EntityInterface $entity);

  /**
   * Returns true if latest revision block id is linked in layout entity.
   *
   * @param int $block_id
   *   The block id.
   * @param int $block_revision_id
   *   The block revision id.
   *
   * @return bool
   *   True latest revision is linked in layout entity.
   */
  public function needsBlockNewRevision($block_id, $block_revision_id);

  /**
   * Gets the latest block revision ids.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The layout entity.
   */
  public function getLatestBlockRevisionIds(EntityInterface $entity);

  /**
   * Return true if content moderation is enabled and content is moderated.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The moderated entity.
   *
   * @return bool
   *   True if content is moderated.
   */
  public function entityModerated(EntityInterface $entity);

}
