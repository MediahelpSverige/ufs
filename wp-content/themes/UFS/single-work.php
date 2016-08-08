<?php 



get_header();

?>

<section id="referensarbete" class="section-white single">

<div class="container-wrap">

	<div class="container">

		<?php 

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post(); 

					//

					// Post Content here

					the_title('<h1 id="worktitle">','</h1>');

					the_content();

					//

				} // end while

			} // end if

?>

	</div>

	</div>

</section>


<script type="text/javascript">
	$(document).ready(function(){

		var title = $('#worktitle').html();
		var link = $('#referensarbete img').attr('src')

		console.log($('#referensarbete img'));

		var images = [];

		var images = $('#referensarbete img');

		for (var i = images.length - 1; i >= 0; i--) {

			console.log(images[i]);

			var src = images[i].currentSrc;
		

			$(images[i]).wrap('<a href="'+src+'" data-lightbox="'+title+'"></a>')

			console.log(images[i].currentSrc);

			//$('#referensarbete img').wrap('<a href="'+link+'" data-lightbox="'+title+'"></a>');
		}

		console.log(images);

		//$('#referensarbete img').wrap('<a href="'+link+'" data-lightbox="'+title+'"></a>');


	});
</script>

<?php get_footer(); ?>