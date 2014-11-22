<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
 
 $post_obj = $wp_query->get_queried_object();
 $post_ID = $post_obj->ID;
 $post_title = $post_obj->post_title;
 $post_name = $post_obj->post_name;

get_template_part('templates/head');
?>

<body id="<?php if(is_search() || is_tag() || is_category() || is_archive() || is_tax() || is_day() || is_month() || is_year() || is_author()){ echo 'search'; } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { echo 'search'; } else if ($post_name != '') { echo $post_name; } else { echo 'single_page'; } ?>"  <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
  <?php if(is_page('home')) { ?>
  <div id="countdowntimer" class="countdowntimers">
        <div class="counter">
        	Save the Date! Ohana: Luau by the Sea only <span id="sea_date" class="countdown-bar"><span></span></span> away!
        </div>
        <div class="counter">
       	 And don't forget about Ohana: Luau by the Lake! <span id="lake_date" class="countdown-bar"><span></span></span>
        </div>
    </div>
    <?php } ?>
        
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
        
        
        
        <?php if(is_page('home')) {   
        $args = array( 'post_type' => 'highlights', 'posts_per_page' => 3 );
		$loop = new WP_Query( $args );
		echo '<ul class="highlights">';
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<li class="highlight">';
			echo '<h3>';
			the_title();
			echo '</h3>';
			the_content();
			echo '</li>';
		endwhile;
		echo '</ul>';
		} ?>
        
      </main><!-- /.main -->
      <?php if(!is_page('home')) { ?>
      
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
	  <?php } ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
