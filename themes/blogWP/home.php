<?php get_header(); ?>
    <section>
        <div class="banner">
        </div>
    </section>

    <section>
        <?php $terms = get_terms(array("taxonomy"=> "Type", "hide_empty"=>false)); ?>

        <h1 class="shop-h1">SHOP STUFF</h1>

        <div class="shop-container">
          <?php foreach ($terms as $term): ?>
            <div class="square">
                <img src="<?php echo get_bloginfo('stylesheet_directory')?>/images/icons/<?php echo $term->slug;?>.svg">
                <h3><?php echo $term -> description;?></p></h3>
                <a href= "<?php echo get_term_link($term) ?>">
                  <button><?php echo $term->slug;?> STUFF</button>
                </a>
            </div>
          <?php endforeach;  ?>

          <?php

          $query_posts = new WP_Query(array (
              "posts_per_page"=> 3,
              "post_type" => "Post",
          ));
          ?>


    </section>

    <section>
        <h1 class="journal-h1">Inhabitent Journal</h1>

        <div class="journal-container">
          <?php
  					$args = array(
  						'posts_per_page' => 3,
  						'order'=> 'DESC',
  						'orderby' => 'date' );
  					$postslist = get_posts( $args );
  					foreach ( $postslist as $post ) :
  					setup_postdata( $post ) ; ?>

            <div class="journal-image">
                <img <?php the_post_thumbnail(); ?>
                <h4><?php the_date('F j, Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></h4>
                <div class="height">
                  <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                </div>
                <a class="read-btn" href="<?php the_permalink(); ?>">READ ENTRY</a>
            </div>
          <?php endforeach; ?>
        </div>
    </section>

    <section>
      <?php
          $query_adventure = new WP_Query(array(
               "posts_per_page" => 4,
               "post_type" => "adventures",
               "order" => "ASC"
               ));

           ?>
        <h1 class="adventure-h1">Latest Adventure</h1>
         <?php $i=0;  ?>
        <div class="container-adventure">
            <div class="flex-container">
              <?php while ( $query_adventure->have_posts() ) : $query_adventure->the_post(); ?>
                <?php $i++;  ?>
                <?php if ( has_post_thumbnail() ) : $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); endif; ?>
              <?php if($i == 1) : ?>
                <div class="firstDiv white-border" style="background: linear-gradient(rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%),url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
              <?php endif ?>
              <?php if($i == 2) : ?>
              <div class="secondDiv">
                  <div class="secondDivTop white-border" style="background:linear-gradient(rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
              <?php endif ?>
              <?php  if($i == 3) : ?>
                  <div class="flex-container">
                      <div class="thirdDivLeft white-border" style="background: linear-gradient(rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
                      <?php endif ?>
                      <?php  if($i == 4) : ?>
                       <div class="thirdDivR white-border" style="background: linear-gradient(rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
                       <?php endif ?>

              <article class="adventure-header" id="post-<?php the_ID(); ?>" <?php post_class(); ?>  >
                  <div class="adventure-text">
                    <h2 class="title"><?php echo the_title()?></h2>
                    <a class="ad-btn" href="<?php echo get_permalink(); ?>"> READ MORE
                      <!-- <button class=" caps">Read More</button> -->
                    </a>
                  </div>
              </article>

              <!-- #post-## -->
              <?php if($i == 1) : ?>
              </div>
              <?php endif ?>
              <?php if($i == 2) : ?>
              </div>
              <?php endif ?>
              <?php if($i == 3) : ?>
              </div>
              <?php endif ?>
              <?php if($i == 4) : ?>
              </div>
              </div>
              </div>
              <?php endif ?>
              <?php endwhile; ?>
              <div class="clr"></div>
              </div>
        </div>
    </div>

        <div class="bottom-btn container-adventure">
            <a href="get_permalink" class="green-btn">MORE ADVENTURES</a>
        </div>
    </section>
<?php get_footer(); ?>
