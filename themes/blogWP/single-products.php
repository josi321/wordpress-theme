<!-- Im in single product.php -->

<?php get_header(); ?>
<br><br>
<div class="single-product-container">
  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
  <div class="single-product-image">
    <img <?php the_post_thumbnail(); ?>
  </div>

  <div class="product-description">
    <h1><?php echo the_title(); ?></h1>
    <h2><?php echo get_field('Price'); ?></h2>
    <p> <?php echo the_content(); ?></p>
    <div class="social-buttons">
      <a href="#"><i class="fa fa-facebook"></i> Like</a>
      <a href="#"><i class="fa fa-twitter"></i> tweet</a>
      <a href="#"><i class="fa fa-pinterest"></i> Pin</a>
    </div>
  </div>
<?php endwhile; ?>
<?php else: ?>
  <?php echo wpautop('Sorry, not avialable'); ?>
<?php endif; ?>
</div>
<div class="clr"></div>

<?php get_footer(); ?>
