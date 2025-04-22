
 $(function() {
	'use strict'
		if (localStorage.getItem("spruhartl") == 'true') {
			$('#navComplex').lightSlider({
				autoWidth: true,
				pager: false,
				slideMargin: 3,
				rtl:true
			});
		}else{
			$('#navComplex').lightSlider({
				autoWidth: true,
				pager: false,
				slideMargin: 3,
				rtl:false
			});
		}
	$('.main-nav-tabs .tab-link').on('click', function(e) {
		e.preventDefault();
		$(this).addClass('active');
		$(this).parent().siblings().find('.tab-link').removeClass('active');
		var target = $(this).attr('href');
		$(target).addClass('active');
		$(target).siblings().removeClass('active');
	})
});