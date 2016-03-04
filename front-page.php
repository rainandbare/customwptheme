<?php

/*
	Template Name: Front Page
*/

get_header();  ?>

<div class="main">
  <div class="hero">
    <div class="hero-overlay">
      <h1><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </div>
	</div>
	<div class="container">
   		<?php // Start the loop ?>
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
    	<?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>