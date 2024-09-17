<?php

namespace Drupal\custom_navigation\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Conference Tabs' Block.
 *
 * @Block(
 *   id = "conference_tabs_block",
 *   admin_label = @Translation("Conference Tabs Block"),
 *   category = @Translation("Custom")
 * )
 */
class ConferenceTabsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => '
        <ul class="tab-links">
          <li class="active"><a href="#" data-tab="featured">Featured Conferences</a></li>
          <li><a href="#" data-tab="recommended">Recommended Conferences</a></li>
          <li><a href="#" data-tab="past">Past Conferences</a></li>
        </ul>',
      '#attached' => [
        'library' => [
          'custom_navigation/custom_tabs_styles',
        ],
      ],
    ];
  }

}
