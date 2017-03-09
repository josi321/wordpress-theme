i am in archive products.php
<?php get_header(); ?>
<?php


 ?>
<br><br><br><br><br>
<div class="shop-page-container">
  <h1>Shop stuff</h1>
  <?php $terms = get_terms(array("taxonomy"=> "Type", "hide_empty"=>false)); ?>
  <div class="product-links">
      <?php foreach ($terms as $term): ?>
          <a href="<?php echo get_term_link($term) ?>/"><?php echo $term->slug ?> </a>
      <?php endforeach; ?>
  </div>
</div>

<div class="archive-products-container">
  <?php
    get_template_part( 'template-parts/content', 'product' );
  ?>
</div>

<?php get_footer(); ?>
