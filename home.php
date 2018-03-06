<?php get_header(); ?>

<div id="ajaxNews" class="square-layout square-skin--news square-skin--large grid grid--full">

<?php
$placesArgs = array (
'type' => 'post',
'posts_per_page' => 8,
'category_name' => 'Places',
);

$categoryPlaces = new WP_Query($placesArgs);

if($categoryPlaces -> have_posts()):

		while ( $categoryPlaces ->have_posts()):$categoryPlaces -> the_post(); ?>

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
	wp_reset_postdata();

	?>

</div>

<!-- News -->
	<div class="news-header">
		<h2>People <img src="<?php echo get_template_directory_uri().'/assets/images/streetsicon.jpg'?>" /></h2>
	</div>

								<!--Adds maroon line-->
							<div class="stories-section">
							</div>
<?php
//args to filter loop
$peopleArgs = array (
'type' => 'post',
'posts_per_page' => 3,
'category_name' => 'People',
);

$categorypeople = new WP_Query( $peopleArgs );

if( $categorypeople -> have_posts()):

		while ( $categorypeople->have_posts()): $categorypeople->the_post(); ?>

			<div class="stories-box">
				<div class="inside-stories-box">

					<a href="<?php the_permalink(); ?>" class="stories-link-image">

						<?php $url1 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
						<div class="story-image-style">
						<?php echo '<img class="inside-story-image"  style="background-image: url('. $url1.')"','/>'?>
						<!--<img class="inside-story-image" style="background-image: url(images/phlegm1.jpg);" />-->
						</div>

					</a>

					<div class="story-text">
						<h2>
							<a href="<?php the_permalink(); ?>"> <span style="font-weight: bold; color: rgb(106,20,0)"><?php the_title(); ?></span></a>

						</h2>
						<span class="name-divider"> <a class="writer-name" href="#">Sheffield Streets</a></span>
						<small><?php the_time('F j, Y'); ?></small>



					</div>


				</div>

			</div>

							<!--Adds maroon line-->
							<div class="stories-section">
							</div>

	<?php	endwhile;

endif;

wp_reset_postdata();
?>

<?php get_footer(); ?>
