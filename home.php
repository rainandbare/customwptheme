<?php

/*
	Template Name: Blog Home Page
*/

get_header();  ?>

<div class="main">

<div class="heroPageFull" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($page); ?>);"> 
	<div class="heroPageFullOverlay"></div> 	
</div>

  <div class="container">

	  <div class="posts">  
	  <h2 class="blogTitle"><?php echo $pagename ?></h2>
	    <?php // Start the loop ?>

	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="wholePost">
			<a href="<?php echo get_permalink( $post ) ?>">

					<div class="postImage">
						<img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
					</div>
					
					<div class="postInfo">
						<h4><?php the_time("M, j, Y"); ?></h4>
					    <h2><?php the_title(); ?></h2>
					    <p><?php the_excerpt(); ?></p>
					</div>
				</a>
				</div>		
			
    	<?php endwhile; // end the loop?>
	<!-- </div> --> <!-- /.posts -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>