<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/less/main.less" />
  
  <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

  <?php wp_head(); ?>
  
  <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/less/main.less" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.0.0/less.min.js"></script>
</head>
