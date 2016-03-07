<?php

/*
	Template Name: Front Page
*/

get_header();  ?>

<div class="main">



  
  <div class="hero" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($page); ?>);">
    <div class="hero-overlay"></div>
  </div>


    

    <div class="heroContent">
      <h1><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </div>
	

  <div class="frontPage">
    <div class="container">
   		<?php // Start the loop ?>
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php echo sm_get_title() ; ?>
      <main class="content"><?php echo sm_get_content(); ?></main>
    	<?php endwhile; // end the loop?>
  </div>
  </div> <!-- /.container -->
  
</div> <!-- /.main -->

<?php get_footer(); ?>