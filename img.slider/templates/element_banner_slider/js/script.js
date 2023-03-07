$(document).ready(function() {
	$('#slider').jshowoff(); 



// Swiper: Slider
new Swiper('.swiper-container-product-page', {
	speed: 600,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	  },
	observer: true,   observeParents: true,
	observeSlideChildren: true,    watchOverflow: true,
	mousewheel: true,
	  loop: true,
	  paginationClickable: true,
	  pagination: {
		  el: '.swiper-pagination',
		  type: 'bullets',
		  clickable: true
		},
	  breakpoints: { 
	  320: {
		slidesPerView: 1,
		},
	  500: {
		slidesPerView: 1,
		},
		800: {
		slidesPerView: 1,
		},
		1100: { 
		slidesPerView: 1,  
		},
	  1500: { 
		slidesPerView: 1,  
		},
	  }
	 
});
});


