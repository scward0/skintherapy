$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		 $(this).toggleClass('open');

	});




	$(window).scroll(function() {
	if ($(this).scrollTop() > 50) {// can be whatever, 0 refers to the top space you allow
				$('#header').addClass('header-white');
				Console.log('hey');
		}
		else {
				$('#header').removeClass('header-white');
		}
	});

});
