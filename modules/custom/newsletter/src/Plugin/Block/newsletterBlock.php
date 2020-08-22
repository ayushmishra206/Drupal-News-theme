<?php
/**
 * @file
 * Contains \Drupal\newsletter\Plugin\Block\newsletterBlock
 */
 namespace Drupal\newsletter\Plugin\Block;
 
 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Session\AccountInterface;
 use Drupal\Core\Access\AccessResult;


 /**
 * Provides a 'newsletter' List Block
 *
 * @Block(
 *   id = "newsletter_block",
 *   admin_label = @Translation("newsletter Block"),
 *   category = @Translation("Blocks")
 * )
 */
class newsletterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\newsletter\Form\newsletterForm');
    }

  /**
   * {@inheritdoc}
   */
  public function blockAccess(AccountInterface $account) {
    /** @var \Drupal\node\Entity\Node $node */
    $node = \Drupal::routeMatch()->getParameter('node');
    $nid = $node->nid->value;
    /** @var \Drupal\newsletter\EnablerService $enabler */
    $enabler = \Drupal::service('newsletter.enabler');
    if(is_numeric($nid)) {
      if($enabler->isEnabled($node)) {
        return AccessResult::allowedIfHasPermission($account, 'view newsletter');
      }
    }
    return AccessResult::forbidden();
  }
  
}