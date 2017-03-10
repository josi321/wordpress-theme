<?php $terms = get_terms(array("taxonomy"=> "Type", "hide_empty"=>false)); ?>
<?php foreach ($terms as $term): ?>
  <?php get_the_post_thumbnail(); ?>
<?php endforeach;  ?>

<div class="taxonomy-container">
  <div class="col-xs-3">
    <div class="product-grids">
        <img class= "taxonomy-img" <?php echo the_post_thumbnail("small"); ?>
        <p class="price">
          <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>.....<?php echo get_field('Price'); ?>
       </p>
    </div>
  </div>
</div>
