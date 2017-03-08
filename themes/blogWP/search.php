<?php get_header(); ?>
<br /><br /><br /><br /><br />
<div class="container content">
		<div class="main block">
			<h1 class="page-header">
		      Search Results
		    </h1>
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="archive-post">
					<h4>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
					</h4>
					<p>Posted On: <?php the_time('F j, Y g:i a'); ?></p>
          <p> <?php the_excerpt(); ?> </p>
              <a class="button" href="<?php the_permalink(); ?>">
                  Read More
              </a>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
