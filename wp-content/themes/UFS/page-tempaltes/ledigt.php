<?php/*Template name: Ledga tjänster*/get_header();?><section class="section-white single">	<div class="container">		<div class="container-wrap">			<?php				if ( have_posts() ) {					while ( have_posts() ) {						the_post();						//print_r($post);						//						// Post Content here						the_content();						//					} // end while				} // end if			?>			<?php $query8 = new WP_Query(array( 'post_type' => 'tjanst', 'post_per_page' => -1) );			//print_r($query8);			while ( $query8->have_posts() ) : $query8->the_post(); ?>			<div class="application-wrap">			<div class="text-application">				<?php the_title('<h2>', '</h2>');  ?>				<?php the_content();?>			</div>			<div class="image-application">				<?php the_post_thumbnail('medium');?>			</div>			<div class="clearfix"></div>			</div>			<?php endwhile;?>		</div>	</div></section><?phpget_footer();?>