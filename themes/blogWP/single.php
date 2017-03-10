<!-- single page -->

<?php get_header(); ?>
<br><br><br>
<div class="container content">
		<div class="main block">
  			<?php if(have_posts()) : ?>

  				<?php while(have_posts()): the_post(); ?>
            <article class="journal-single-post">
                <h3>
                    <?php the_title(); ?>
                </h3>
								<?php if(has_post_thumbnail()): ?>
										<div class="post-thumbnail">
												<?php the_post_thumbnail(); ?>
										</div>
								<?php endif; ?>
								<h4><?php the_date('F j, Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / BY <?php the_author(); ?></h4
								<br />
									<p>
										<?php echo the_content(); ?>
									</p>
            </article>

  				<?php endwhile; ?>
  			<?php else : ?>
  				<?php echo wpautop('Sorry, No posts were found'); ?>
  			<?php endif; ?>
				<br><br><br>
				<!-- Comments section -->
				<?php comments_template(); ?>
  		</div>
      <?php get_sidebar(); ?>

    </div>

		<?php get_footer(); ?>
