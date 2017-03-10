<!-- adventure single -->
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
<div class="adventures-container">
  <div class="adventure-paragraphs">
            <h3>
                <?php the_title(); ?>
            </h3>
            <h1 style="font-size:1.1rem; text-transform:uppercase;">Created By <?php the_author(); ?></h1>
            <div class="adv-para" style="font-size: 1.12rem; line-height: 1.5;padding: 1rem 0;">
              <p>
                <?php the_content(); ?>
              </p>
            </div>
            <br />
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, No posts were found'); ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
