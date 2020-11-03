$(document).ready(function () {
	$(".slider").slick({
		arrows: true,
		dots: true,
		slidesToShow: 2,
		speed: 1000,
		autoplaySpeed: 800,
		centerMode: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
});

$(".goto").click(function () {
	var el = $(this).attr("href").replace("#", "");
	var offset = 0;
	$("body,html").animate({ scrollTop: $("." + el).offset().top + offset }, 500, function () {});

	if ($(".header-menu").hasClass("active")) {
		$(".header-menu,.header-menu__icon").removeClass("active");
		$("body").removeClass("lock");
	}
	return false;
});
