<?php
// Template name: Price
 ?>

<div class="row">

<?php
    $a=array(
    'post_type' => 'products',
    'posts_per_page' => 16
    );
    $my_query = null;
    $my_query = new WP_Query($a);

if( $my_query->have_posts() ) {
    echo '';
$i = 0;
while ($my_query->have_posts()) : $my_query->the_post();
    if($i % 4 == 0) { ?>
        <div class="row">
            <?php
            }
            ?>
            <div class="col-xs-3">
              <div class="product-grids">
                  <?php echo the_post_thumbnail("small"); ?>
                  <p class="price">
                    <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>.....<?php echo get_field('Price'); ?>
                 </p>
              </div>
            </div>

            <?php $i++;
     if($i != 0 && $i % 4 == 0) { ?>
       </div><!--row-->


     <?php
      } ?>

     <?php
       endwhile;
       }
       wp_reset_query();
       ?>
