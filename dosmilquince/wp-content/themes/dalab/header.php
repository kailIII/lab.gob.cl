<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="XpIYcEgH_McFiS51zqtQhsFJhpQZHx4-YdGdCydDJ8Y" />

  <title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?></title>

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/style.css?v10">

  <!-- Libraries -->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/vendors/modernizr-2.8.3.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery-2.1.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/vendors/masonry.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/vendors/imagesloaded.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/vendors/slick.min.js"></script>

  <!-- Custom -->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/functions.js"></script>

  <?php wp_head(); ?>

</head>
<?php global $post; $slug = get_post( $post )->post_name; ?>
<body <?php body_class($slug); ?> >
  <div id="container">
    <header class="global">
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <?php wp_nav_menu( array('menu' => 'Principal','container' => '', 'menu_class' => 'main')); ?>
    </header>
  <!-- // -->
