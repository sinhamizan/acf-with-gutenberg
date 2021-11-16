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
create a php file and design your UI look
For exmaple my php file name is block-card.php and path is "template-parts/blocks/block-card.php"

### Step Three
create a ACF group with block title that you created Step one.
![image](https://user-images.githubusercontent.com/26348416/141890407-379fd4cd-adcb-4e44-a1ae-b78938b43df5.png)



### My Card Block
![image](https://user-images.githubusercontent.com/26348416/141890067-b59feb96-11c6-4a99-803a-bd0c2a897251.png)

![image](https://user-images.githubusercontent.com/26348416/141890515-fda6fc62-c9df-4fba-8bd7-156e1368905c.png)


### UI Look
![image](https://user-images.githubusercontent.com/26348416/141890209-03da8746-b5ac-49fc-bc4e-a53c37a5c7f7.png)
