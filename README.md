# How to Integrate ACF with gutenberg
we can integrate ACF with gutenberg just following 3 steps:

### Step One
write below code in functions.php

function custom_ACF_blocks() {
  if( function_exists( 'acf_register_block_type' ) ) {

    acf_register_block_type(array(
      'name' => 'card_blocks',
      'title' => __('My Card'),
      'description'=> __('This is a card'),
      'keywords' => array( 'my card', 'card' ),
      'render_template' => 'template-parts/blocks/block-card.php',
      'category' => 'formatting',
      'icon' => 'format-image',
      'mode' => 'edit',
    ));

  }
}
add_action( 'acf/init', 'custom_ACF_blocks' );

### Step Two
create a block php file and design your UI look

### Step Three
create a ACF group with block title that you created Step one.
