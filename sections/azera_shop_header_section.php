<!-- CONTAINER -->
<?php

	$azera_website_name = get_bloginfo( 'name', 'display' );
	$azera_website_description = get_bloginfo( 'description' );
	$azera_shop_header_title = get_theme_mod('azera_shop_header_title',$azera_website_name);
	$azera_shop_header_subtitle = get_theme_mod('azera_shop_header_subtitle',$azera_website_description);
	$azera_shop_header_button_text = get_theme_mod('azera_shop_header_button_text',esc_html__('GET STARTED','azera-shop'));
	$azera_shop_header_button_link = get_theme_mod('azera_shop_header_button_link','#');
	$azera_shop_enable_move = get_theme_mod('azera_shop_enable_move');
	$azera_shop_first_layer = get_theme_mod('azera_shop_first_layer', azera_shop_get_file('/images/background1.png'));
	$azera_shop_second_layer = get_theme_mod('azera_shop_second_layer',azera_shop_get_file('/images/background2.png'));
	$azera_shop_header_layout = get_theme_mod('azera_shop_header_layout','layout2');

	if(!empty($azera_shop_header_title) || !empty($azera_shop_header_subtitle) || !empty($azera_shop_header_button_text)){
?>

<?php
	if( !empty($azera_shop_enable_move) && $azera_shop_enable_move ) {

		echo '<ul id="parallax_move">';


			if ( empty($azera_shop_first_layer) && empty($azera_shop_second_layer) ) {

				$azera_shop_header_image2 = get_header_image();
				echo '<li class="layer layer1" data-depth="0.10" style="background-image: url('.$azera_shop_header_image2.');"></li>';

			} else {

				if( !empty($azera_shop_first_layer) )  {
					echo '<li class="layer layer1" data-depth="0.10" style="background-image: url('.$azera_shop_first_layer.');"></li>';
				}
				if( !empty($azera_shop_second_layer) ) {
					echo '<li class="layer layer2" data-depth="0.20" style="background-image: url('.$azera_shop_second_layer.');"></li>';
				}

			}

		echo '</ul>';

	}
?>

		<div class="overlay-layer-wrap">
			<div class="container fbownz-overlay-layer" id="parallax_header">

			<div class="row">
				<!-- 
					I introduced my custom CSS classes in order to reduce the margin
					'fbownz-intro-section', and also to reduce the h1 font-size
					'fbownz-intro'
				 -->
				<div class="col-md-6 intro-section-text-wrap">

					<div id="intro-section" class="fbownz-intro-section white-text fbownz-header-dark">
						<h1 class="fbownz-intro " style="font-size: 30px; font-family: open sans;font-weight: 400; line-height: 120%;">
						 CUSTOM WRITING SERVICES </h1>
					
						<div class="subtitle" style="text-align: left;font-family:open sans; line-height: 150%; font-size: 20px" >
							Welcome to essay writing help, we have reasonable prices for your quality non-plagiarized paper. Our experts will write an original quality papers, essays, assignments, dissertations, book reviews, speeches, research papers and landing web content.
							<br>
							<p style="text-align: left;font-family:open sans; line-height: 150%; font-size: 20px">Why we are the best:</p>
							<ul style="text-align: left;font-family:open sans; line-height: 150%; font-size: 20px">
								  <li>Any Deadline. Any Subject.</li>
								  <li>Plagiarism Free</li>
								  <li>Professional Writers  </li>
								  <li>Complete Confidentiality</li>
								  <li>Original Quality Papers</li>
								</ul>

							
						</div>
						<br>
					
							<div class="col-md-6 col-sm-12">
									<a href="https://96.9.222.64/~dev/bonty/index.php/product/essay-writing-services/"><img class="img-responsive" src="https://96.9.222.64/~dev/bonty/wp-content/uploads/2017/07/placeorder2.png" alt="Place an Order">
									</a>
				</div><!-- .col-md-6-->
							</div>
						</div>
				

				<div class="col-md-6 intro-section-text-wrap" style="background-color:rgb(255,255,255,0.7); margin-top: 40px;">
					
					<div id="intro-section" class="fbownz-intro-section fbownz-header-dark-1">
						<h1 class="fbownz-intro white-text" style="font-family: open sans;font-size: 35px;font-weight: 400;color: black; line-height: 150%;">
						 Calculate the Price
						</h1>

						<?php	

							// We are embedding our calculate cost order form 
							gravity_form( 3, $display_title = false, $display_description = false, $echo = true );

						?>
					</div>
				</div><!-- .col-md-6-->
			</div>
			</div>
		</div>

<?php
	}
?>