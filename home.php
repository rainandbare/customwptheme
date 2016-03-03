<?php

/*
	Template Name: Blog Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		

		<h4><?php the_time("M, j, Y"); ?></h4>
		<img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
		


      	<h2><?php the_title(); ?></h2>
      	<p><?php the_excerpt(); ?></p>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>