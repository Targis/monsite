$(function() {

	$('.grid').masonry({
		// options
		itemSelector: '.grid-item',
		columnWidth: 450
	});

	// Mobile menu
	$(".toggle-menu").click(function() {
		$(".sandwich").toggleClass("active");
		$(".menu").slideToggle();
	});


});
