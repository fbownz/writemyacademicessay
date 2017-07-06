<?php
/**
 * @package azera-shop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-single-page'); ?>>
	<header class="entry-header single-header">
		<?php the_title( '<h1 itemprop="headline" class="entry-title single-title">', '</h1>' ); ?>
		<div class="colored-line-left"></div>
		<div class="clearfix"></div>

		

	</header><!-- .entry-header -->

	<div itemprop="text" class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'azera-shop' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<h2 style="posttitle">Is this question part of your assignment?</h2>

<div class="entry-attachment">

<a href="http://localhost/clientWebsite/product/essay-writing-services/" title="Write My Essay, Make an order"><img src="http://localhost/clientWebsite/wp-content/uploads/2017/06/order_essay.png" title="Place order Now" alt="Place order"></a>

</div

	
</article><!-- #post-## -->
