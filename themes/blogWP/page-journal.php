<!-- in the the journal page -->
<?php get_header(); ?>
<br /><br /><br /><br /><br />
<div class="container content">
		<div class="main archive-block">
<?php
  $args = array(
    'posts_per_page' => 6,
    'order'=> 'DESC',
    'orderby' => 'date' );
  $postslist = get_posts( $args );
  foreach ( $postslist as $post ) :
  setup_postdata( $post ) ; ?>
  <div class="height-containers">
    <h2 class="journal-h2"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
    <img <?php the_post_thumbnail(); ?>
    <h4 class="pull-right"><?php the_date('F j, Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></h4>
		<br><br><br>
		<p><?php the_excerpt(); ?></p>
		<br><br>
    <a style="color:black" class="read-btn" href="<?php the_permalink(); ?>">READ ENTRY → </a>
    <br><br><br><br>
  </div>

<?php endforeach; ?>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
