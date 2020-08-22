<?php

namespace Drupal\layout_builder_ibqe\EventSubscriber;

use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\layout_builder\Event\SectionComponentBuildRenderArrayEvent;
use Drupal\layout_builder\LayoutBuilderEvents;
use Drupal\layout_builder_ibqe\BlockRevisionHelperInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Builds render arrays and handles access for all block components.
 *
 * @internal
 *   Tagged services are internal.
 */
class BlockComponentContextualLink implements EventSubscriberInterface {

  use StringTranslationTrait;

  /**
   * The helper.
   *
   * @var \Drupal\layout_builder_ibqe\BlockRevisionHelperInterface
   */
  private $helper;

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[LayoutBuilderEvents::SECTION_COMPONENT_BUILD_RENDER_ARRAY] = ['onBuildRender', 90];
    return $events;
  }

  /**
   * Creates a BlockComponentRenderArray object.
   *
   * @param \Drupal\layout_builder_ibqe\BlockRevisionHelperInterface $helper
   *   The current user.
   */
  public function __construct(BlockRevisionHelperInterface $helper) {
    $this->helper = $helper;
  }

  /**
   * Builds render arrays for block plugins and sets it on the event.
   *
   * @param \Drupal\layout_builder\Event\SectionComponentBuildRenderArrayEvent $event
   *   The section component render event.
   */
  public function onBuildRender(SectionComponentBuildRenderArrayEvent $event) {
    $block = $event->getPlugin();
    if (!$block instanceof BlockPluginInterface || $block->getBaseId() != 'inline_block') {
      return;
    }
    /** @var \Drupal\Core\Plugin\Context\EntityContext $context_entity */
    $context_entity = $event->getContexts()['layout_builder.entity'];
    $layout_base_entity = $context_entity->getContextValue();
    if ($layout_base_entity instanceof EntityPublishedInterface && $this->helper->entityModerated($layout_base_entity) && $layout_base_entity->isPublished()) {
      return;
    }
    $build = $event->getBuild();
    $content = $block->build();
    $build['#contextual_links'] = isset($content['#contextual_links']) ? $content['#contextual_links'] : [];
    $event->setBuild($build);
  }

}
