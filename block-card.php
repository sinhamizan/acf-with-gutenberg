<style>
  .my-card {
    width: 360px;
    margin: 0 auto;
    border: 1px solid #ddd;
  }
</style>

<?php $image = get_field('card_image'); ?>
<div class="my-card">
  <div class="card-header">
    <img src="<?php echo $image['url']; ?>" alt="">
  </div>
  <div class="card-body">
    <h3><?php echo get_field('card_title'); ?></h3>
    <p><?php echo get_field('card_description'); ?></p>
  </div>
</div>