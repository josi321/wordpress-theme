
<!-- Im in archive-adventure.php -->

<?php
/**
 * Template name: Archives
 */

get_header(); ?>

<div class="ad-archive-title">
  <h1>LATEST ADVENTURES</h1>
</div>

<div class="container-adventure">
  <div class="adventure-grid">
  <?php
      $query_adventure = new WP_Query(array(
           "posts_per_page" => 4,
           "post_type" => "adventures",
           "order" => "ASC"
           ));

       ?>
  <?php if(have_posts()): ?>
    <?php while($query_adventure->have_posts() ) : $query_adventure->the_post(); ?>
  <div class="col-md-6">
    <img <?php the_post_thumbnail(); ?>
    <div class="ad-title-btn">
      <h1> <?php echo the_title(); ?></h1>
        <h2><a href="<?php the_permalink(); ?>">READ MORE</a></h2>
    </div>
  </div>
<?php endwhile; ?>
<?php else: ?>
  <?php wpautop('Sorry, no post were found!') ?>
<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
