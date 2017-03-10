<br>

<?php get_header(); ?>


<?php if ( have_posts() ) : ?>
  <header>
    <div class="product-taxonomy-header">
      <h1><?php single_term_title(); ?></h1>
      <p>
        <?php echo term_description(); ?>
      </p>
    </div>
  </header>

  <div class="taxonomy-grid" style="height:70%;">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php
          get_template_part( 'template-parts/content', 'taxonomy' );
        ?>
      <?php endwhile; ?>

<?php else : ?>
  <?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

</div>


<?php get_footer(); ?>
