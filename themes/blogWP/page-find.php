<?php
// Template name: Find Us
 ?>

 <?php get_header(); ?>
<div class="container content">
  		<div class="main">
        <br><br><br><br><br>
 			<?php while ( have_posts() ) : the_post(); ?>
        <?php echo get_field('map'); ?>
 				<?php get_template_part( 'template-parts/content', 'page' ); ?>


 			<?php endwhile; // End of the loop. ?>


</div>
  <br><br><br><br><br>
 <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
