<?php
/*
Template Name: Single Post
*/
get_header(); ?>


<?php get_header(); ?>


<div id="ajaxNews" class="square-layout square-skin--news square-skin--large grid grid--full">

<?php 
	
if( have_posts()):

		while ( have_posts()): the_post(); ?>

			<div class="grid__item desk-one-quarter lap-and-up-one-quarter palm-one-half">
                

                        <div class="square square--3">
                            <div class="square__inner">
                                <div class="square__inner__content">

                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                        <div class="square-details">
                                            <span class="name-divider">Author</span>
                                            <small><?php the_time('F j, Y'); ?></small>
                                        </div>

                                </div>
                            </div>
                        </div>
				</div>
		
		<?php	endwhile;
	
	endif; 
	
	?>
	
</div>	
	
	



<?php get_footer(); ?>
