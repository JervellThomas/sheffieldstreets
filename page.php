<?php get_header(); ?>

<?php 

if( have_posts()):

		while ( have_posts()): the_post(); ?>
		
		 <div class="news-post-section">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			
			<span class="post-author-divider"><a class="writer-name" href="#">Sheffield Streets</a></span>
			
			<small><?php the_time('F j, Y'); ?></small>
			
			<p><?php the_content();?></p> 
			
			<hr>
		</div>
		<?php	endwhile;
	
	endif; 
	
	?>
			

<?php get_footer(); ?>