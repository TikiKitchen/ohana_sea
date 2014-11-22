<header class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
      
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   </div>

    
    <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ohana_logo_small.png" alt="ohana_logo_small" /></h1>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <?php include('searchform.php') ?>
    </nav>
    
  </div>
</header>

<header class="banner" role="banner">
	<section class="beach">
	  <div class="container">
		 
		  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/beachballlady.png" class="spot">
		  
		  <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ohana_logo.png" alt="<?php bloginfo('name'); ?>" /></a>
		  
		  <h2><?php bloginfo('description'); ?></h2>
	  </div>
	</section>
</header>