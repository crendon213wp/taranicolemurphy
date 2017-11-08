<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="social-wrapper">
			<ul>
				<li><a href="https://www.facebook.com/taranicolemurphy" target="_blank">
					<img src="http://192.168.1.12/taranicolemurphy/wp-content/uploads/2017/04/FBLogoblue.png" alt="Facebook Logo" class="facebook-icon"></a></li>
				<li><a href="https://www.instagram.com/taranicolemurphy" target="_blank">
					<img src="http://192.168.1.12/taranicolemurphy/wp-content/uploads/2017/04/glyph-logo.jpg" alt="Instagram Logo" class="instagram-icon"></a></li>
		        <li><a href="#" target="_blank">
					<img src="http://192.168.1.12/taranicolemurphy/wp-content/uploads/2017/04/TwitterSocialIcon.png" alt="Twitter Logo" class="twitter-icon"></a></li>
				<li><a href="https://www.youtube.com/channel/UC2u4D_Z74jYBGBuQ88rZeiQ" target="_blank">
					<img src="http://192.168.1.12/taranicolemurphy/wp-content/uploads/2017/04/YouTubeicon.png" alt="Youtube Logo" class="youtube-icon"></a></li>
			</ul>
        </div>
                
        <nav class="footer-nav" role="navigation">
           <p>Copyright 2013 - <?php echo date('Y'); ?> Tara Nicole Murphy &copy;. All rights reserved.<br/>
           <!-- Designed by <a href="#">Infinite Dreams Design</a> --></p>
	    </nav>
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
