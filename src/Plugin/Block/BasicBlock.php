<?php
/**
 * @file
 * Contains \Drupal\example_blocks\Plugin\Block\BasicBlock
 */

namespace Drupal\example_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
Use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * A basic block with a simple text output.
 *
 * @Block(
 *   id = "basic_block",
 *   admin_label = @Translation("Basic Block"),
 *   category = @Translation("CTI Example Blocks"),
 * )
 */
class BasicBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => Link::fromTextAndUrl(t('CTI Digital'), Url::fromUri('https://www.ctidigital.com'))->toString(),
    );
  }
}
