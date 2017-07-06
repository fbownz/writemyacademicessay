<?php
	
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 99 );

	function remove_unwanted_functions() {
		// So I use the remove_action wordpress Hook method to remove 
		// the flash and image from showing on the product form on the order page

		remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
		remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

		// I don't want to see the title on the product page so I remove it.
		remove_action('woocommerce_single_product_summary','woocommerce_template_single_title', 5); 

		// I also remove the "add_action('blog_header','azera_shop_blog_header');"
		// I do this so as not to call the parent theme azera_shop_blog_header and instead use my fbownz_shop_sample_page_header
		remove_action('blog_header','azera_shop_blog_header');
	}	
	add_action('wp_loaded','remove_unwanted_functions');
	

	// I replaced the original azera_shop_blog_header()
	// Function with my own and removed the initial one

	function fbownz_shop_sample_page_header(){
	$azera_shop_blog_header_image = get_theme_mod( 'azera_shop_blog_header_image', azera_shop_get_file('/images/background-images/background.jpg') );
	$azera_shop_blog_header_title = get_theme_mod( 'azera_shop_blog_header_title', esc_html__('BLOG','azera-shop')  );
	$azera_shop_blog_header_subtitle = get_theme_mod( 'azera_shop_blog_header_subtitle' );

		if( !empty($azera_shop_blog_header_image) || !empty($azera_shop_blog_header_title) || !empty($azera_shop_blog_header_subtitle) ) {

			if( !empty($azera_shop_blog_header_image) ) {
				echo '<div class="archive-top" style="background-image: url('.$azera_shop_blog_header_image.');" role="banner">';
			} else {
				echo '<div class="archive-top" role="banner">';
			}
			echo '<div class="section-overlay-layer">';
			echo '<div class="container">';
			if( !empty($azera_shop_blog_header_title) ) {
				echo '<p class="archive-top-big-title">'.$azera_shop_blog_header_title.'</p>';
				echo '<p class="colored-line"></p>';
			}

			if( !empty($azera_shop_blog_header_subtitle) ) {
				echo '<p class="archive-top-text">'.$azera_shop_blog_header_subtitle.'</p>';
			}
			the_archive_description( '<div class="taxonomy-description">', '<p></div>' ); 
                                if (is_category(array(78,79))) : 
									// I added the code below to add my search form
									echo do_shortcode(' [searchandfilter fields="search,post_tag"  submit_label="Filter Essays" all_items_labels=", All topics"]');
									// End of search form  
                                endif; 
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
	}
	add_action('blog_header','fbownz_shop_sample_page_header', 15);

	// Added a function to show the progress bar on the checkout page
		add_action( 'woocommerce_before_checkout_form','add_progress_bar_checkout');
		function add_progress_bar_checkout(){
			echo'<div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%">
		    Place Order
		  </div>
		  <div class="progress-bar progress-bar-success" role="progressbar" style="width:25%">
		    Confirm Order
		  </div>
		  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:30%">
		    Enter Order Details & Make Payment
		  </div>
		  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
		    Order Placed
		  </div>
		</div>';	
		}

		add_action( 'woocommerce_before_cart','add_progress_bar_cart');
		function add_progress_bar_cart(){
			echo'<div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%">
		    Place Order
		  </div>
		  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:25%">
		    Confirm Order
		  </div>
		  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:30%">
		    Enter Order Details & Make Payment
		  </div>
		  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
		    Order Placed
		  </div>
		</div>';	
		}

		add_action( 'woocommerce_before_single_product_summary','add_progress_bar_single_product');
		function add_progress_bar_single_product(){
			echo'<div class="progress">
			<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:25%">
		    Place Order
		  </div>
		  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
		    Confirm Order
		  </div>
		  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:30%">
		    Enter Order Details & Make Payment
		  </div>
		  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
		    Order Placed
		  </div>
		</div>';	
		}

//Wordpress Maintenance mode

/*
function wp_maintenance_mode(){
    if(!current_user_can('edit_themes') || !is_user_logged_in()){
        wp_die('
		<!doctype html>
		<title>Site Maintenance</title>
		<style>
		  body { text-align: center; padding: 150px; }
		  h1 { font-size: 50px; }
		  body { font: 20px Helvetica, sans-serif; color: #333; }
		  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
		  a { color: #dc8100; text-decoration: none; }
		  a:hover { color: #333; text-decoration: none; }
		</style>

		<article>
		    <h1>We&rsquo;ll be back soon!</h1>
		    <div>
		        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always check for status updates on <a href="https://twitter.com/myacademicessay"> Twitter</a> or <a href="mailto:support@writemyacademicessay.com">Contact Us</a>, otherwise we&rsquo;ll be back online shortly!</p>
		        <p>&mdash; WriteMyAcademicEssay Team</p>
		    </div>
		</article>
        ');
    }
}
add_action('get_header', 'wp_maintenance_mode');
*/
//End Wordpress Maintenance mode