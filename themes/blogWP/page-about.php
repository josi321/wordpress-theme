<?php
// Template name: About
 ?>

<?php get_header(); ?>

<section class="about-image">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()): the_post(); ?>
      <article class="post" style="position: relative;">
        <?php if(has_post_thumbnail()): ?>
            <div class="post-thumbnail" style="background: linear-gradient( to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%); z-index:1">
                <?php the_post_thumbnail(); ?>
            </div>
            <h1 class="about" style="position: absolute;top: 33%; width: 100%;"><?php the_title() ?></h1>
          <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

</section>

<div class="about-container">
  <div class="about-paragraphs">
    <h2 class="about-title"><?php echo get_field("title1"); ?></h2>
    <p> <?php echo get_field("title1_content"); ?></p>
    <h2 class="about-title"><?php echo get_field("title2"); ?></h2>
    <p><?php echo get_field("title2_content") ?></p>
  </div>
</div>

<?php get_footer(); ?>
