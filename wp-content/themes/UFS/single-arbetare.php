<?php 

get_header();
?>
<section class="section-white single">
<div class="container-wrap">
	<div class="container">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here
					?>
					<div class="worker-content">
					<?php
					the_title('<h1>','</h1>');
					the_content();
					?>
					</div>
					<div class="worker-image">
					<?php
					the_post_thumbnail('large');
					?>
					</div>
					<?php
					//
				} // end while
			} // end if
?>
	</div>
	</div>
</section>
<?php get_footer(); ?>