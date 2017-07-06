<?php
/**
 * @package azera-shop
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('border-bottom-hover'); ?> itemtype="http://schema.org/BlogPosting" itemtype="http://schema.org/BlogPosting">

	<header class="entry-header">

			
			
		

		<?php the_title( sprintf( '<h1 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<div class="colored-line-left"></div>
		<div class="clearfix"></div>

	</header><!-- .entry-header -->
	<div itemprop="description" class="entry-content entry-summary">
		<?php
			$ismore = @strpos( $post->post_content, '<!--more-->');
			if($ismore) : the_content( sprintf( esc_html__('Read more %s &#8230;','azera-shop'), '<span class="screen-reader-text">' . esc_html__('about ', 'azera-shop') . esc_html( get_the_title() ) .'</span>' ) );
			else : the_excerpt();
			endif;
		?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'azera-shop' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!-- <h2 style="posttitle">Is this question part of your assignment?</h2>

	<div class="post-img-wrap">
	
	<a href="https://writemyclassessay.com/shop/custom-writing-service/" title="Write My Essay, Make an order"><img src="http://i2.wp.com/writemyacademicessay.com/wp-content/uploads/2016/02/footer_banner1.jpg" title="Place order Now" alt="Place order"></a>

	</div> -->
</article><!-- #post-## -->