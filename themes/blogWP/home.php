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
                <button><?php echo $term->slug;?> Stuff</button>
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
                <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                <a class="read-btn" href="<?php the_permalink(); ?>">READ ENTRY</a>
            </div>
          <?php endforeach; ?>
        </div>
    </section>

    <section>
        <h1 class="adventure-h1">Latest Adventure</h1>
        <div class="container">
            <div class="flex-container">
                <div class="large canoe white-border">
                    <h1 class="title">Getting Back to nature in a canoe</h1>
                    <a class="ad-btn" href="<?php the_permalink(); ?>">READ MORE</a>
                </div>

                <div class="float-right">
                    <div class="small beach white-border">
                        <h1 class="title">a night with friends at the beach</h1>
                        <a class="ad-btn" href="<?php the_permalink(); ?>">READ MORE</a>
                    </div>

                    <div class="flex-container">
                        <div class="xs mountain white-border">
                            <h1 class="title-small">taking in the view at big mountain</h1>
                            <a class="ad-btn" href="<?php the_permalink(); ?>">READ MORE</a>
                        </div>

                        <div class="xs star white-border">
                            <h1 class="title-small">taking in the view at big mountain</h1>
                            <a class="ad-btn" href="<?php the_permalink(); ?>">READ MORE</a>
                        </div>
                    </div>

                </div>
                <div class="clr"></div>

            </div>
        </div>

        <div class="bottom-btn">
            <a href="#" class="green-btn">MORE ADVENTURES</a>
        </div>
    </section>
<?php get_footer(); ?>
