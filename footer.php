<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<div id="box-disclaimer-footer">
				<div id="title-logo-footer"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/disclaimer" target="_self">DISCLAIMER</a></div>
			</div>

			<div id="site-generator">
				<strong><?php bloginfo('name'); ?> <?php the_date('Y'); ?></strong><br />
                Todos os Direitos Reservados
           
            </div>
			
			<div id="box-logo-footer">
				<div id="title-logo-footer">Um Agente de Investimentos da:</div>
				<div id="logo-footer">
				<a href="http://www.xpi.com.br/" target="_blank">
				</a>
				</div>
			</div>
			
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>