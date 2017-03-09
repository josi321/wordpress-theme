<?php
// Template name: Price
 ?>
<div class="row">


 <div class="col-xs-3">
   <?php
   $query_products = new WP_Query(array(
                 "posts_per_page" => 16,
                   "post_type" => "products",
                   "order" => "ASC"
                   ));

   ?>
    	<?php if(has_post_thumbnail()) : ?>
        <?php while ( $query_products->have_posts() ) : $query_products->the_post(); ?>
    		<div class="post-thumbnail">
    				<?php echo the_post_thumbnail("small"); ?>
    		</div>
    	<p class="price">
       <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>.....<?php echo get_field('Price'); ?>
     </p>

     <?php endwhile; ?>
     <?php endif; ?>
 </div>

</div>
