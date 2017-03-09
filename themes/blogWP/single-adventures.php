adventure single
<?php get_header(); ?>

<section class="single-adventure-image">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()): the_post(); ?>
      <article class="post">
        <?php if(has_post_thumbnail()): ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
</section>
<div class="about-container">
  <div class="adventure-paragraphs">
            <h3>
                <?php the_title(); ?>
            </h3>
            <div>
            Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
            </div>

            <br><br><br>
            <?php the_content(); ?>
            <br />
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, No posts were found'); ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
