<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
  <h2 id="servicios">Calem S.A, empresa especializada en self storage, alquiler de almacenes, alquiler de trasteros y alquiler de minialmacenes en Sevilla</h2>
	<div id="widgets" class="home-widgets">
		<div id="home_widget_1" class="grid col-300">
			<?php responsive_widgets(); // above widgets hook ?>

				<div class="widget-wrapper">

					<div class="widget-title-home"><h3>Pida su presupuesto</h3></div>
					<div class="textwidget">
            <form name="contacto" id="contacto" method="POST" action="http://www.calemtrasteros.es/contacto">
              <label>Nombre</label> <input type="text" name="nombre" id="nombre" required="required" title="Indique su nombre completo" placeholder="Su nombre" value="" /><br />
              <label>Tel&eacute;fono</label> <input type="tel" name="telefono" id="telefono" title="Indique su tel&eacute;fono de contacto" placeholder="Su Tel&eacute;fono" value="" /><br />
              <label>E-mail</label> <input type="email" name="email" id="email" required="required" title="Indique su E-mail" placeholder="Su E-mail" value="" /><br />
              <label id="label-mensaje">Mensaje</label> <textarea id="mensaje" name="mensaje" required="required" placeholder="Su mensaje"></textarea><br />
              <input type="submit" name="enviar" id="enviar" value="ENVIAR" />
            </form>
          </div>

				</div><!-- end of .widget-wrapper -->

			<?php responsive_widgets_end(); // responsive after widgets hook ?>
		</div>
		<!-- end of .col-300 -->

		<div id="home_widget_2" class="grid col-300">
			<?php responsive_widgets(); // responsive above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-2' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 2', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your second home widget box. To edit please go to Appearance > Widgets and choose 7th widget from the top in area 7 called Home Widget 2. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 -->

		<div id="home_widget_3" class="grid col-300 fit">
			<?php responsive_widgets(); // above widgets hook ?>

			<?php if( !dynamic_sidebar( 'home-widget-3' ) ) : ?>
				<div class="widget-wrapper">

					<div class="widget-title-home"><h3><?php _e( 'Home Widget 3', 'responsive' ); ?></h3></div>
					<div
						class="textwidget"><?php _e( 'This is your third home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 3. Title is also manageable from widgets as well.', 'responsive' ); ?></div>

				</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-3 ?>

			<?php responsive_widgets_end(); // after widgets hook ?>
		</div>
		<!-- end of .col-300 fit -->
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>