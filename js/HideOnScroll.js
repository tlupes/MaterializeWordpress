// Hide Header on on scroll down
(function ($, root, undefined) {

	var lastScrollTop = 0;
	$(window).scroll(function() {

		if ($(this).scrollTop()> lastScrollTop)
		{
			$('.down-on-scroll').addClass('nav-down');
			$('.up-on-scroll').addClass('nav-up');
			$('.small-header').addClass('nav-up');
		}
		else
		{
			$('.down-on-scroll').removeClass('nav-down');
			$('.up-on-scroll').removeClass('nav-up');
			if($(this).scrollTop() > $('.header-section').height())
				$('.small-header').removeClass('nav-up');
		}

		if($(this).scrollTop() < $('.header-section').height())
		{
			$('.small-header').addClass('nav-up');
		}

		lastScrollTop = $(this).scrollTop();
	});
})(jQuery, this);