<?php
/**
 * canvas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package canvas
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

// ACF with Gutenberg
function custom_ACF_blocks() {
  if( function_exists( 'acf_register_block_type' ) ) {

    acf_register_block_type(array(
      'name' => 'card_blocks',
      'title' => __('My Card'),
      'description'=> __('This is a card'),
      'keywords' => array( 'canvas', 'card' ),
      'render_template' => 'template-parts/blocks/block-card.php',
      'category' => 'formatting',
      'icon' => 'format-image',
      'mode' => 'edit',
    ));

  }
}
add_action( 'acf/init', 'custom_ACF_blocks' );