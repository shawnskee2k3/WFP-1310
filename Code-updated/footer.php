<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Coller
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="footer-container">
            <div id="footer-navigation"> 
            <?php wp_nav_menu(array( 'theme_location' => 'footer')); ?>
            </div> 
            
            
        	<?php
			if ( (function_exists( 'of_get_option' ) && (of_get_option('footertext2', true) != 1) ) ) : ?>
            <div id="footertext">
           <?php
			 	echo of_get_option('footertext2', true); 
			?> </div> 	
			<?php endif; ?>
        	 
            <?php if ( of_get_option('credit1', true) == 0 ) : ?>
            <div class="site-info">
                <?php do_action( 'coller_credits' ); ?>
                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'coller' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'coller' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( __( '%1$s Theme by %2$s.', 'coller' ), 'Coller', '<a href="http://rohitink.com" rel="designer">Rohit Tripathi</a>' ); ?>
            </div>
        <?php endif; ?>  
        </div><!--#footer-container-->
            
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php if ( of_get_option('footcode1', true) !=1 ) {
	echo of_get_option('footcode1', true);
}
	?>
<?php wp_footer(); ?>
</body>
</html>
