<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" class="home-article">
	<header class="entry-header">
		<?php if ( is_front_page() ) { ?>
	<h1 class="entry-title" style="display: none;"><?php the_title(); ?></h2>
<?php } else { ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
<?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-content center" style="margin-top: 1em;">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
