<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">


<div class="heroPageFull" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($page); ?>);"> 
	<div class="heroPageFullOverlay"></div> 	
</div>
  <div class="pageFull">
  	

  	<div class="container">
   		<?php // Start the loop ?>
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php echo sm_get_title(); ?>
     <!--  <main class="content"><?php echo sm_get_content(); ?></main> -->

     	<?php the_content(); ?>
    	<?php endwhile; // end the loop?>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>