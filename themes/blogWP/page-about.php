<?php
// Template name: About
 ?>

<?php get_header(); ?>

<section class="about-image">
    <h1 class="about"> <?php echo the_title(); ?></h1>
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
