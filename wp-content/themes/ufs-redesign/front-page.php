<?php
get_header();
?>
<section class="banner">
<div class="container">
	<!--
		<div class="banner-logo">
		<a href="http://ufs.mediahelpcrm.se/"><img src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"></a>
	</div>-->
	<?php
		$args = array(
							'posts_per_page'   => -1,
							'offset'           => 0,
							'category'         => '',
							'orderby'          => 'date',
							'order'            => 'DESC',
							'include'          => '',
							'exclude'          => '',
							'meta_key'         => '',
							'meta_value'       => '',
							'post_type'        => 'slider',
							'post_mime_type'   => '',
							'post_parent'      => '',
							'author'	   	   => '',
							'post_status'      => 'publish',
							'suppress_filters' => true
						);
		$count = 0;
	$posts_array = get_posts( $args ); ?>
	<div id="homebanner" class="owl-carousel">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach ($posts_array as $post) { ?>

				<?php setup_postdata( $post ); ?>

				<div class="swiper-slide" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>');">
				<div class="animted banner-text">
				<?php the_content(); ?>
				</div>
				</div>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	</div>
</section>
<section class="welcome-section">
	<div class="container">


		<!--<h1 style="text-align:center;"><?php the_field('titel'); ?></h1>-->
			<div class="welcome-wrap">
			
			<div class="row">
		<div class="col-md-8 col-sm-8">

		<div class="border-wrap">

		
			<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							//
							// Post Content here
							the_content();
			?>
			<?php
			//
			} // end while
			} // end if
			?>
			<div class="welcome-imagess">
				
			</div>
		</div>
		</div>
		<div id="facebook-sb" class="col-md-4 col-sm-4">
		<div class="border-wrap">
		<h4 class="small-title">Följ oss på facebook</h4>
			<div class="facebook-wrap">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwww.ufs.nu%2F%3Ffref%3Dts&tabs=timeline&width=330&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=911661125591162" width="330" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
					<div class="row">
					<div class="col-md-12">

					<div class="border-wrap" id="service">
					<h4 class="small-title">Våra tjänster</h4>
						<div class="col-md-2">
							<a href="<?php bloginfo('url')?>/tjanster/byggservice-2/">
								<div class="service-wrap" style="background-image:url('<?php bloginfo('url');?>/wp-content/uploads/2016/04/bygg-e1467271972766.jpg')">
									<div class="image-wrap">
										<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/06/ufs_byggservice-1.png">
									</div></div>
								</a>
							</div>
							<div class="col-md-2">
								<a href="<?php bloginfo('url')?>/tjanster/fuktskador">
									<div class="service-wrap" style="background-image:url('<?php bloginfo('url');?>/wp-content/uploads/2016/06/ref2_small.jpg')">
										<div class="image-wrap">
											<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/06/ufs_fukttektin-2.png">
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-2">
								<a href="<?php bloginfo('url')?>/tjanster/rivning-och-sanering">
									<div class="service-wrap" style="background-image:url('<?php bloginfo('url') ?>/wp-content/uploads/2016/06/stationen.jpg')">
										<div class="image-wrap">
											<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/06/ufs_sanering-1.png">
										</div></div>
									</a>
								</div>
								<div class="col-md-2">
									<a href="<?php bloginfo('url')?>/tjanster/vvs-rormokare-i-uppsala">
										<div class="service-wrap" style="background-image:url('<?php bloginfo('url') ?>/wp-content/uploads/2016/06/ror_small.jpg')">
											<div class="image-wrap">
												<img src="<?php bloginfo('url') ?>/wp-content/uploads/2016/06/ufs_rorservice-1.png">
												
											</div></div>
										</a>
									</div>
									<div class="col-md-2">
										<a href="<?php bloginfo('url')?>/fastighetsjour">
											<div class="service-wrap" style="background-image:url('<?php bloginfo('url') ?>/wp-content/uploads/2016/08/brandkar.jpg')">
												<div class="image-wrap">
													<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/06/ufs_jour.png">
												</div>
											</div>
										</a>
									</div>

									<div class="clearfix"></div>

									</div>
								</div>
						</div>

	</div>
	</div>
	<div class="services-wrap">
		<div class="container">

					</div>
					<div class="row">
						<!--
						<div class="col-md-12">
							<a href="<?php bloginfo('url')?>/tjanster/">
								<div class="single-service">
									<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/03/upplandsjouren.jpg">
								</div>
							</a>
						</div>-->
					</div>
					<div class="container">
						<div class="row partner-row">
							<div class="col-md-12">
								<h2 id="service-title">Våra Partners</h2>
								<div id="partnerslider">
									<div class="swiper-container">
										<div class="swiper-wrapper">
											<?php $my_query = new WP_Query(array( 'post_type' => 'partner', 'post_per_page' => -1) );
											//print_r($query8);
											while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
											<div class="swiper-slide partner-item">
												<?php the_post_thumbnail('small');?>
											</div>
											<?php endwhile;?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--
					<section class="section-blue">
								<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>
					</section>
				-->
				<?php get_footer(); ?>