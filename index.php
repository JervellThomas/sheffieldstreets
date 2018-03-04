<?php get_header(); ?>


<div id="ajaxNews" class="square-layout square-skin--news square-skin--large grid grid--full">

<?php 
	
if( have_posts()):

		while ( have_posts()): the_post(); ?>

			<div class="grid__item desk-one-quarter lap-and-up-one-quarter palm-one-half">
                
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>


                        <div class="square square--3">
						<?php echo '<span class="square__bg"  style="background-image: url('. $url.')">','</span>'?>
                            <div class="square__inner">
                                <div class="square__inner__content">

                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                        <div class="square-details">
                                            <span class="name-divider">Sheffield Streets</span>
                                            <small><?php the_time('F j, Y'); ?></small>
                                        </div>

                                </div>
								<a aria-label="<?php the_title(); ?>" class="link-wrap" href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                        </div>
				</div>
		
		<?php	endwhile;
	
	endif; 
	
	?>
	
</div>	
	
	



<?php get_footer(); ?>