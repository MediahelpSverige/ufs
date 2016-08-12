<script type="text/javascript" src="<?php bloginfo('template_url');?>/bower_components/Swiper/dist/js/swiper.min.js"></script>

<footer>

	<!--<div class="nav-menu footer"><div class="container"><?php wp_nav_menu( array( 'theme_location' => 'footer_nav', 'menu_class' => 'navbar-footer','container_class' => 'footer-menu-container') ); ?></div></div>-->

	<div class="bottom-footer">

		<div class="adress">

			<ul>

				<li>UFS AB</li>

				<li>Svederusgatan 3</li>

				<li>754 50 Uppsala</li>

			</ul>

			<?php dynamic_sidebar('footer-adress'); ?>

		</div>

		<div class="loggor">

			<?php $my_query = new WP_Query(array( 'post_type' => 'footer_logo', 'post_per_page' => -1) );

			//print_r($query8);

			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

			<div class="f-logo">

				<span class="helper"></span>

				<?php the_post_thumbnail('medium');?>

			</div>

			<?php endwhile;?>

		</div>

		<div class="kontakt">

			<ul>

				<li>Telefon	018-14 15 40</li>

				<li>Svederusgatan 3	018-14 15 41</li>

				<li>E-post	<a href="mailto:info@ufs.nu">info@ufs.nu</a></li>

			</ul>

		</div>

	</div>

</footer>

<script src="<?php bloginfo( 'template_url' ); ?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/custom.min.js" async></script>

<?php wp_footer(); ?>

</div>

</body>

</html>