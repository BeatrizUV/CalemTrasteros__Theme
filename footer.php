<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<div id="keywords" class="grid col-940">trasteros - almacenes - minialmacenes - self storage - guardamuebles - alquiler de trasteros - alquiler de almacenes - alquiler de minialmacenes - alquiler de guardamuebles - trasteros sevilla<br />almacenes sevilla - minialmacenes sevilla - guardamuebles sevilla - alquiler trasteros sevilla - alquiler almacenes sevilla - alquiler minialmacenes sevilla - alquiler guardamuebles sevilla</div>

		<div class="grid col-300 copyright">
			<?php esc_attr_e( '&copy;', 'responsive' ); ?> <?php echo date( 'Y' ); ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</div>

		<div class="grid col-300 scroll-top"></div>

		<div class="grid col-300 fit powered"><a title="Aviso Legal" href="http://www.calemtrasteros.es/aviso-legal">Aviso Legal</a></div>

	</div>

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>