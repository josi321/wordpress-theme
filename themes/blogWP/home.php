<?php get_header(); ?>
    <section>
        <div class="banner">
        </div>
    </section>

    <section>
      <?php get_terms(array("taxonomy"=> "Type", "hide_empty"=>false)); ?>
        <h1 class="shop-h1">SHOP STUFF</h1>

        <div class="shop-container">
            <div class="square">
                <img src= "<?php echo get_template_directory_uri(); ?>/images/icons/do.svg" alt="do icon">
                <h3>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</h3>
                <button type="button">DO STUFF</button>
            </div>

            <div class="square">
                <img src= "<?php echo get_template_directory_uri(); ?>/images/icons/eat.svg" alt="cup icon">
                <h3>Nothing beats food cooked over fire. We have all you need for good camping eats.</h3>
                <button type="button">EAT STUFF</button>
            </div>

            <div class="square">
                <img src= "<?php echo get_template_directory_uri(); ?>/images/icons/sleep.svg" alt="sleepbag icon">
                <h3>Get a good night's rest in the wild in a home away from home that travels well.</h3>
                <button type="button">SLEEP STUFF</button>
            </div>

            <div class="square">
                <img src= "<?php echo get_template_directory_uri(); ?>/images/icons/wear.svg" alt="sweater icon">
                <h3>From flannel shirts to toques, look the part while roughing it in the great outdoors.</h3>
                <button type="button">WEAR STUFF</button>
            </div>
        </div>
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
