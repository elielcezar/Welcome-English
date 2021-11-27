<!doctype html>
<html>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php get_template_part("main-menu"); ?>

