
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="container-header site-header">
        <div class="logo">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" class="logo" alt="Inhabitent Logo" />
          </a>
        </div>
        <nav class="nav main-nav">
            <div class="nav-container">
              <?php
                  // make a variable that holds an array to be passed to the wp nav funtion
                  $args= array(
                    'theme_location' => 'primary'
                  );
               ?>
               <?php wp_nav_menu($args); ?>
            </div>
            <div class="h_right">
          <form method="get" action="<?php esc_url(home_url('/')); ?>">
            <i class="fa fa-search fa-2x">
              <input type="text" name="s" />
            </i>
          </form>
        </div>
      </nav>
    </header>
