$('[data-ride=carousel]').carousel({
	interval: 5000,
	wrap: false
});

$('.multiple-items.carousel .carousel-item').each(function(){
	var minPerSlide = $('.carousel-item').length;
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));
	
	for (var i=0;i<minPerSlide;i++) {
		next=next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
	}
});

var totalItems = $('.managers-slider-item').length;
var currentIndex = $('.managers-slider-item.active').index() + 1;
$('.managers-slider-numbers').html('<span class="managers-slider-numbers__current">0' + currentIndex + '</span>/<span class="managers-slider-numbers__total">0' + totalItems + '</span>');

$('#managersCarousel').on('slid.bs.carousel', function () {
	var currentIndex = $('.managers-slider-item.active').index() + 1;
	$('.managers-slider-numbers').html('<span class="managers-slider-numbers__current">0' + currentIndex + '</span>/<span class="managers-slider-numbers__total">0' + totalItems + '</span>');
});

$.fn.ulSelect = function(){
	$(this).on('click', function(){
		$(this).toggleClass('active');
	});
}

$('.dd-list').ulSelect();

$('.my-burger').click(function(){
	$('body').toggleClass('menu-open');
});

$('.header-search .icon-magnifier').click(function(){
	$(this).hide();
	$('.header-search__form').addClass('search-form-open');
	return false;
});
	
$('.header-search__form .icon-cross').click(function(){
	$('.header-search__form').removeClass('search-form-open');
	$('.header-search .icon-magnifier').show();
	return false;
});

// validate forms

$("[type=submit]").prop("disabled", true);
$('form input').on('keyup', validate);

function validate() {
	var inputsWithValues = 0;
	var myInputs = $(this).parents('form').find("input:not([type=submit]):not([type=hidden]):not([type=checkbox]):not([type=radio])");
	
	//console.log($(this).parents('form'));
	
	myInputs.each(function(e) {
		if ($(this).val()) {
			inputsWithValues += 1;
		}
	});
	
	//console.log('inputsWithValues = ' + inputsWithValues + "; " + 'myInputs.length = ' + myInputs.length);
	
	if (inputsWithValues == myInputs.length) {
		$(this).parents('form').find("[type=submit]").prop("disabled", false);
	} else {
		$(this).parents('form').find("[type=submit]").prop("disabled", true);
	}
};

var $modal_video;
$('.btn-play').click(function() {
	$modal_video = $(this).data("src");
});
//console.log($modal_video);

$('#modal-video').on('shown.bs.modal', function (e) {
	$("#video").attr('src',$modal_video + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
})

$('.circle').each(function(){
	
	var bar = new ProgressBar.Circle(this, {
		strokeWidth: 11,
		easing: 'easeInOut',
		duration: 1400,
		color: '#4e58f0',
		trailColor: '#e3f2ff',
		trailWidth: 11,
		svgStyle: null
	});

	bar.animate($(this).data("value"));
	
});

if($("select").length){

	$("select").select2({
		minimumResultsForSearch: -1,
		dropdownAutoWidth: true,
		dropdownCssClass: 'bigdrop',
	});

	$('select').on('select2:open', function(e){
		$('.select2-results__options').scrollbar().parent().addClass('scrollbar-inner');
	});
	
}

$('.partners-map-control a').on('click', function () {
	
	$('.partners-map-control a').removeClass('active');
	$(this).addClass('active');

	if($(this).hasClass('partners-map-control__buttons-onmap')){
		
		$('#map').fadeIn('fast');
		$('.partners-list').fadeOut('fast');
		
	}else{
		
		$('#map').fadeOut('fast');
		$('.partners-list').fadeIn('fast');
		
	}
	
	return false;

});