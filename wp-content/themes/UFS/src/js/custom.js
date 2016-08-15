$(document).ready(function(){

	console.log($('.nav-menu').offset())

	var menuleft = ($('.nav-menu').offset());

		console.log(menuleft.left);

	var menuOrigin = menuleft.left;

	var menuTopOrigin = menuleft.top;


								$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});



		$('.menu-toggle').click(function(){

			$('.site_nav').slideToggle();

		})

		$('.dropbtn').click(function(){

			$('.dropdown-content').slideToggle();

		})

	var mySwiper = new Swiper ('#homebanner .swiper-container', {

	// Optional parameters

	loop: true,

	autoplay: 6000,

	nextButton: '.swiper-button-next',

	prevButton: '.swiper-button-prev',

	pagination: '.swiper-pagination',

	paginationClickable: true,

	slidesPerView: 1,

spaceBetween: 15,

breakpoints: {

1024: {

slidesPerView: 1,

spaceBetween: 40

},

768: {

slidesPerView: 1,

spaceBetween: 30

},

640: {

slidesPerView: 1,

spaceBetween: 20

},

320: {

slidesPerView: 1,

spaceBetween: 10

}

}

	

	})

		var parterSlider = new Swiper ('#partnerslider .swiper-container', {

	// Optional parameters

	loop: true,

	autoplay: 4000,

	nextButton: '.swiper-button-next',

	prevButton: '.swiper-button-prev',

	pagination: '.swiper-pagination',

	paginationClickable: true,

	slidesPerView: 3,

	centeredSlides: true,

spaceBetween: 20,

breakpoints: {


	550:{
		slidesPerView:1

	}




},


	onSlideChangeStart: function(swiper) {

			$('.banner-text').animateCss('fadeInUp');
		$('.banner-text').css({
			display: "block",
		})
	},
	onSlideChangeEnd: function(swiper) {

	}

	})

	var w = $(window).innerWidth();

	var body = $('body');

	var rightheader = $('.right-header');

	var rightheaderoff = rightheader.offset();

	var nav = $('header .nav-menu');

	var wrap = $('header .container');
	var wrapOffset = wrap.offset();

	var offset = nav.offset();

	var navlogo = $('#whitelogo');

	console.log(offset.top);




if (w > 995) {

$(window).scroll(function(e){

	console.log($('.sticky-bg').offset());


	if (body[0].scrollTop > offset.top) {



		$('header .nav-menu').css({right: wrapOffset.right});


		body.addClass('fixed-nav');


/*
		$('.header').css({
			'margin-bottom':'50',
		});
*/
		var stickyNav = $('.fixed-nav header .nav-menu').css({
			left: menuOrigin
		});

		nav.height('50px');


		nav.css({
			'margin-top': '0px'

		})


		$('.navbar-nav li a').css({
			'padding' : '10px 15px'
		})

		//nav.width($('.container').width())

				$('#whitelogo').css({
			display:'block',
			height: '35px',
			opacity: '1',
		}).delay( 5000 );



	}else{

		$('.navbar-nav li a').css({
			'padding' : '13px 15px'
		})

		nav.css({
			'margin-top': '7px'
		})


		//$('header .nav-menu').css({right:'initial'});


		$('#whitelogo').css({
			opacity:'0',
			height: '0',
		});
		body.removeClass('fixed-nav')
				$('.header').css({
			'margin-bottom':'0px',
		});

				nav.height('50px');

				//nav.width($('.right-header').width())
	}
	console.log(offset.top);
});

}



if( w > 768){
$('.menu-item-has-children').hover(
function(){
$(this).children('.sub-menu').slideDown(200,stop());
},
function(){
$(this).children('.sub-menu').slideUp(200,stop());
}
);
function stop(){

$('.sub-menu').stop(true, true);
}
//RESPONSIVE HERE
}else{
var parentItems = [];
$('.menu-item-has-children').each( function(i){
$(this).children('a').css({
'font-weight':'bold',
})
} );
/*
if ($('li').parent('.menu-item-has-children').lenght) {
console.log(this);
}
$('.menu-item-has-children li a').first().css({
'font-weight':'bold',
});
*/
$('.menu-item-has-children a').click(function(e){
var parent = $( event.target ).closest('li');
//$('.sub-menu',this.parent()).slideToggle();
var submenu = $(parent).children('.sub-menu');
//console.log(parent);
$(submenu).first().slideToggle();
});
}
$('.navbar-toggle').click(function(){
$('#menu-primary-menu').slideToggle(400,function(){
});

});
});