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
          <br />
              <a class="button" href="<?php the_permalink(); ?>">
                  Read More
              </a>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</div>

		<div class="side">
			<div class="block">
      <h1>Contact Info</h1>
      <p><i class="fa fa-phone"> 779-456-7891</i></p>
      <p><i class="fa fa-envelope"> info@inhabitent.com</i></p>
      <p class="black"><i class="fa fa-map-marker"> 1490 W Broadway <br />   Vancouver, BC V6H 1H5</i></p>

      <br /><br />
      <h1>Business hours</h1>
      <p class="black"><span class="bold">Monday-Friday:</span> 9am to 5pm</p>
      <p class="black"><span class="bold">Saturday:</span> 9am to 5pm</p>
      <p class="black"><span class="bold">Sunday:</span> closed</p>
      <br /><br />

      <h1>Archives</h1>
  		<ul>
  			<?php wp_get_archives('type=monthly'); ?>
  		</ul>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
