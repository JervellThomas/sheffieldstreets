<?php
/*
 * Template part for displaying more stories section
 *******MORE STORIES SECTION*****
 */

?>


<div class="stories-header">
    <h2>More Stories <img src="<?php echo get_template_directory_uri().'/assets/images/streetsicon.jpg'?>" /></h2>
</div>

<!--Adds maroon line-->
<div class="stories-section">
</div>


<?php
$randomBlogsArg = array (
'orderby'        => 'rand', //selects random posts
'type' => 'post',
'posts_per_page' => 3,
);

$last3Blogs = new WP_Query($randomBlogsArg);

if( $last3Blogs->have_posts()):

		while ( $last3Blogs->have_posts()): $last3Blogs->the_post(); ?>

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
