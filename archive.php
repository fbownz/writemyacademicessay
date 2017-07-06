<?php
/**
 * I created my archive pages in order to show sample pages in a good way :D.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package azera-shop
 */

get_header();
azera_shop_wrapper_start('col-md-8 post-list', true); ?>

	<main <?php if(have_posts()) echo 'itemscope itemtype="http://schema.org/Blog"'; ?> id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				get_template_part( 'content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->

<?php
azera_shop_wrapper_end(true);
get_footer(); ?>
