<?php
/**
 * @file
 * Contains \Drupal\newsletter\EnablerService.
 */

namespace Drupal\newsletter;

use Drupal\Core\Database\Database;
use Drupal\node\Entity\Node;

/**
 * Defines a service for managing Subscriber list enabled for nodes.
 */
class EnablerService {
  /**
   * Constructor.
   */
  public function __construct() {

  }

  /**
   * Sets a individual node to be Subscriber enabled.
   *
   * @param \Drupal\node\Entity\Node $node
   */
  public function setEnabled(Node $node) {
    if (!$this->isEnabled($node)) {
      $insert = Database::getConnection()->insert('newsletter_enabled');
      $insert->fields(array('nid'), array($node->id()));
      $insert->execute();
    }
  }

  /**
   * Checks if an individual node is Subscriber enabled.
   *
   * @param \Drupal\node\Entity\Node $node
   *
   * @return bool
   *  Whether the node is enabled for the Subscriber functionality.
   */
  public function isEnabled(Node $node) {
    if ($node->isNew()) {
      return FALSE;
    }
    $select = Database::getConnection()->select('newsletter_enabled', 're');
    $select->fields('re', array('nid'));
    $select->condition('nid', $node->id());
    $results = $select->execute();
    return !empty($results->fetchCol());
  }

  /**
   * Deletes enabled settings for an individual node.
   *
   * @param \Drupal\node\Entity\Node $node
   */
  public function delEnabled(Node $node) {
    $delete = Database::getConnection()->delete('newsletter_enabled');
    $delete->condition('nid', $node->id());
    $delete->execute();
  }

}
