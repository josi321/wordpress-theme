<!-- when you click the category it brings you to the archive, or if you click author or date -->
<!--  copy code from index.php to get started-->
<?php get_header(); ?>

<div class="container content">
		<div class="main block">
			<h1 class="page-header">
		      <?php
		        if(is_category()){
		          single_cat_title();
		        } else if(is_author()){
		          the_post();
		          echo 'Archives By Author: ' .get_the_author();
		          rewind_posts();
		        } else if(is_tag()){
		          single_tag_title();
		        } else if(is_day()){
		          echo 'Archives By Day: ' .get_the_date();
		        } else if(is_month()){
		          echo 'Archives By Month: ' .get_the_date('F Y');
		        } else if(is_year()){
		          echo 'Archives By Year: ' .get_the_date('Y');
		        } else {
		          echo 'Archives';
		        };
		      ?>
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
