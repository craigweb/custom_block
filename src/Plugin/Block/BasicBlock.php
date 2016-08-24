<?php

/**
 * @file
 * Contains \Drupal\example_blocks\Plugin\Block\BasicBlock
 */

namespace Drupal\example_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a basic block with a simple text output.
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
      '#markup' => $this->t('This is a basic block'),
    );
  }
}
