single page

<?php get_header(); ?>
<div class="container content">
		<div class="main block">
  			<?php if(have_posts()) : ?>
  				<?php while(have_posts()): the_post(); ?>
            <article class="post">
                <!-- article is like a div, it wraps around each post -->
                <h3>
                    <?php the_title(); ?>
                </h3>
                <div>
      					Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
      					</div>

                <!-- we added the image to the overview page, now we need to add image to single page. check to see if theres an img, if there is then post it-->
                <?php if(has_post_thumbnail()): ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <br><br><br>
      					<?php the_content(); ?>
                <br />
            </article>
  				<?php endwhile; ?>
  			<?php else : ?>
  				<?php echo wpautop('Sorry, No posts were found'); ?>
  			<?php endif; ?>

        <!-- Comments section -->
        <?php comments_template(); ?>
  		</div>
      <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
