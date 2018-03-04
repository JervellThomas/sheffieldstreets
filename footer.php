	<?php
/**
 * The template for displaying the footer
 *
 * 
 */

?>
	<footer class="footer-basic-centered">

            <p class="footer-company-motto">
                
                <a href="https://www.facebook.com/StreetsSheffield" title="Facebook"> <i class="fa fa-facebook fa-2x footer-icon" aria-hidden="true"></i></a>
                <a href="#" title="Twitter"><i class="fa fa-twitter fa-2x footer-icon" aria-hidden="true"></i></a>
                <a href="#" title="Instagram"><i class="fa fa-instagram fa-2x footer-icon" aria-hidden="true"></i></a>

            </p>



				<?php 
				wp_nav_menu(array(
				'theme_location'=>'secondary',
				'container'=>'nav',
				'container_class' => 'custom-menu-class', 
				'menu_class'      => 'navbar-nav',
				
				)); 
				?>
                
            



            <?php the_custom_logo ();?>

	</footer>
		

	
	
<?php wp_footer(); ?>
</body>
</html>
