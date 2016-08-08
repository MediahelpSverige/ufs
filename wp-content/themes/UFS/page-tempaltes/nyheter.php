<?php /* Template name: nyheter

*/
get_header();
?>


<section class="section-white single">

	<div class="container">
	<div class="container-wrap">
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//print_r($post);
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>

<?php $my_query = new WP_Query(array( 'post_type' => 'nyheter', 'post_per_page' => -1) );
//print_r($query8);
					  while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

			<?php the_post_thumbnail('medium');?>

		<?php the_title('<h2>', '</h2>');  ?>

		<?php the_content();?>
	    <?php endwhile;?>


	    </div>
</div>
</section>

<?php 
get_footer();
?>