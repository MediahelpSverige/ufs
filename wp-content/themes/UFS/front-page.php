<?php
get_header();
?>
<div class="container">
<div class="row">
<div class="col-md-12">
	<div class="intro-banner" style="background-image:url('<?php bloginfo('template_url'); ?>/img/sidhuvud_v3.jpg')">
		
	</div>
	</div>


	

	<div class="col-md-6" id="intro-text">

				<h1 class="title">Välkommen till UFS!</h1>
				<p>Vi erbjuder sedan 1996 helhetslösningar inom ett flertal tjänsteområden som du kan läsa om nedan.</p>

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
		
	<div class="">

		<!--<h1 style="text-align:center;"><?php the_field('titel'); ?></h1>-->
			<div class="welcome-wrap">
								<a href="<?php bloginfo('url')?>/tjanster/byggservice-2/">
								<h4 class="small-title">Byggservice</h4>
								<div class="service-wrap large" style="background-image:url('<?php bloginfo('url');?>/wp-content/uploads/2016/04/bygg-e1467271972766.jpg')">
									<div class="image-wrap">
										<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/09/bygg.png">
									</div></div>

								</a>
							
						<div class="clearfix"> </div>




		</div>


	</div>
	</div>


		<div id="facebook-sb" class="col-md-3 col-sm-3">
		<div class="border-wrap">
		<h4 class="small-title">Följ oss på facebook</h4>
			<div class="facebook-wrap">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwww.ufs.nu%2F%3Ffref%3Dts&tabs=timeline&width=260&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=911661125591162" width="220" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			</div>

			<!--<div class="border-wrap">
				<h4 class="small-title">UFS 20 år!</h4>
				<img class="alignnone wp-image-474 size-full" style="display: block; margin: auto;" src="<?php bloginfo('url');?>/wp-content/uploads/2016/03/ufs20logo.png" width="400" height="327" />
			</div>-->
											<div id="partnerslider">
													<h4 class="small-title">Partners</h4>
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
		<div id="facebook-sb" class="col-md-3 col-sm-3">

				
							<div class="border-wrap">

								<a href="<?php bloginfo('url')?>/tjanster/fuktskador">
									<h4 class="small-title">Fuktteknik</h4>
									<div class="service-wrap" style="background-image:url('<?php bloginfo('url');?>/wp-content/uploads/2016/06/ref2_small.jpg')">
										<div class="image-wrap">
											<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/09/fuktt.png">
										</div>
									</div>
								</a>
							</div>
							<div class="border-wrap">
								<a href="<?php bloginfo('url')?>/tjanster/rivning-och-sanering">
								<h4 class="small-title">Riv & Sanering</h4>
									<div class="service-wrap" style="background-image:url('<?php bloginfo('url') ?>/wp-content/uploads/2016/06/stationen.jpg')">
										<div class="image-wrap">
											<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/09/Asset-9.png">
										</div></div>
									</a>
								</div>
								<div class="border-wrap">
									<a href="<?php bloginfo('url')?>/tjanster/vvs-rormokare-i-uppsala">
									<h4 class="small-title">Rörservice</h4>
										<div class="service-wrap" style="background-image:url('<?php bloginfo('url') ?>/wp-content/uploads/2016/06/ror_small.jpg')">
											<div class="image-wrap">
												<img src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/09/Asset-4-1.png">
												
											</div></div>
										</a>
									</div>
															<div class="border-wrap">
							<a href="<?php bloginfo('url')?>/fastighetsjour">
							<h4 class="small-title">Fastighetsjour</h4>
								<div class="service-wrap" style="background-image:url('<?php bloginfo('url') ?>/wp-content/uploads/2016/08/brandkar.jpg')">
									<div class="image-wrap">
										<img style="width:85%;" src="http://ufs.mediahelpcrm.se/wp-content/uploads/2016/09/jour-slim.png">
									</div>
								</div>
							</a>
							</div>


									<div class="clearfix"></div>
		</div>
		</div>


<div class="row">
	

	<div class="col-md-12" id="intro-text">

		

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

				</section>
				<!--
					<section class="section-blue">
								<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>
					</section>
				-->
				</div>
				<?php get_footer(); ?>