<?php
/**
 * @file
 * Contains \Drupal\example_blocks\Plugin\Block\IntermediateBlock
 */

namespace Drupal\example_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * An intermediate block that uses a theme hook and template to inform the
 * output.
 *
 * @Block(
 *   id = "intermediate_block",
 *   admin_label = @Translation("Intermediate Block"),
 *   category = @Translation("CTI Example Blocks"),
 * )
 */
class IntermediateBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'intermediate_block',
      '#company' => $this->t('CTI Digital'),
      '#address' => $this->t('31 Date Street, Manchester, M1 1EY'),
    );
  }
}
