in the the journal page
<?php get_header(); ?>

<div class="container content">
  		<div class="main">
        <br><br><br><br><br>
 			<?php while ( have_posts() ) : the_post(); ?>
        <?php echo the_post_thumbnail(); ?>
 				<?php get_template_part( 'template-parts/content', 'page' ); ?>


 			<?php endwhile; // End of the loop. ?>


</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
