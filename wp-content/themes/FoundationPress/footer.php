<section class="container" id="footer">
	<div class="row">
		<div class="columns small-12 medium-4 large-4">
			<p id="left">
				1817 south main street, #18<br>
				Salt Lake City, UT 84115
			</p>
			<ul class="menu menu-left">
				 <li><a href="#"><img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/Instagram.png" alt=""></a></li>
				 <li><a href="#"><img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/Facebook.png" alt=""></a></li>
 		 </ul>
		</div>
		<div class="columns small-12 medium-4 large-4 text-center">
			<img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/logo_footer.png" alt="">
			<p>All Contents &copy; <?php echo date("Y"); ?>. All Rights Reserved. </p>
		</div>
		<div class="columns small-12 medium-4 large-4">
			<p id="right">
				801-800-6602<br>
				utahacneclinic@hotmail.com
			</p>
			<ul class="menu menu-right">
				 <li><a href="#"><img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/Google.png" alt=""></a></li>
				 <li><a href="#"><img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/Pinterest.png" alt=""></a></li>
		 </ul>
		</div>
	</div>
</section>



<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.7'><\/script>".replace("HOST", location.hostname));
//]]></script>

<script type="text/javascript">
	$(document).ready(function(){

		$('#headline1').addClass('hide');
		$('#button1').addClass('invisible');
		setTimeout(function() { $('#headline1').removeClass('hide').addClass('animated fadeIn'); }, 2000);
		setTimeout(function() { $('#button1').removeClass('invisible').addClass('animated fadeIn'); }, 3500);

		$('#nav-icon3').click(function(){

			if ($(this).hasClass('open') ) {
				$(this).removeClass('open');
				$('#menu').removeClass('fadeIn');
				$('#menu').addClass('hide fadeOut');

			}else{
					$(this).addClass('open');
					$('#menu').removeClass('hide fadeOut');
					$('#menu').addClass('fadeIn');
			}

		});


		$(window).scroll(function() {

		if ($(this).scrollTop() > 50) {// can be whatever, 0 refers to the top space you allow
				$('#header').addClass('header-white');
			}
			else {
				$('#header').removeClass('header-white');
			}

			if($(window).width() > 768){

				var hT = $('#road-map-steps').offset().top,
	         hH = $('#road-map-steps').outerHeight(),
	         wH = $(window).height(),
	         wS = $(this).scrollTop(),
	         windowWidth = $(window).width();

				$('.left').addClass('invisible');
				$('.up').addClass('invisible');
				$('.right').addClass('invisible');

				if (Math.round(wS) < (Math.round(hT+hH-wH-250))){
					$('.left').removeClass('animated fadeInLeft');
					$('.up').removeClass('animated fadeInUp');
					$('.right').removeClass('animated fadeInRight');
					$('.in').removeClass('animated fadeIn');

					$('.left').addClass('invisible');
					$('.up').addClass('invisible');
					$('.right').addClass('invisible');
					$('.in').addClass('invisible');
				}

				if (Math.round(wS) > (hT+hH-wH-250)){
					$('.left').removeClass('invisible');
					$('.up').removeClass('invisible');
					$('.right').removeClass('invisible');
					$('.in').removeClass('invisible');

					$('.left').addClass('animated  fadeInLeft');
					$('.up').addClass('animated  fadeInUp');
					$('.right').addClass('animated fadeInRight');
					$('.in').addClass('animated fadeIn');
				}


				// headline2

				var hT2 = $('.headline2').offset().top,
	         hH2 = $('.headline2').outerHeight(),
	         wH2 = $(window).height(),
	         wS2 = $(this).scrollTop(),
	         windowWidth = $(window).width();

				$('.headline2').addClass('invisible');

				if (Math.round(wS2) < (Math.round(hT2+hH2-wH2-100))){
					$('.headline2').removeClass('animated fadeIn');
					$('.headline2').addClass('invisible');
				}

				if (Math.round(wS2) > (hT2+hH2-wH2-100)){
					$('.headline2').removeClass('invisible');
					$('.headline2').addClass('animated fadeIn');
				}

				// headline3

				var hT3 = $('.headline3').offset().top,
					 hH3 = $('.headline3').outerHeight(),
					 wH3 = $(window).height(),
					 wS3 = $(this).scrollTop(),
					 windowWidth = $(window).width();

				$('.headline3').addClass('invisible');

				if (Math.round(wS3) < (Math.round(hT3+hH3-wH3-100))){
					$('.headline3').removeClass('animated fadeIn');
					$('.headline3').addClass('invisible');
				}

				if (Math.round(wS3) > (hT3+hH3-wH3-100)){
					$('.headline3').removeClass('invisible');
					$('.headline3').addClass('animated fadeIn');
				}


				// headline4

				var hT4 = $('.headline4').offset().top,
					 hH4 = $('.headline4').outerHeight(),
					 wH4 = $(window).height(),
					 wS4 = $(this).scrollTop(),
					 windowWidth = $(window).width();

				$('.headline4').addClass('invisible');

				if (Math.round(wS4) < (Math.round(hT4+hH4-wH4-100))){
					$('.headline4').removeClass('animated fadeIn');
					$('.headline4').addClass('invisible');
				}

				if (Math.round(wS4) > (hT4+hH4-wH4-100)){
					$('.headline4').removeClass('invisible');
					$('.headline4').addClass('animated fadeIn');
				}



				// headline5


				var hT5 = $('.headline5').offset().top,
					 hH5 = $('.headline5').outerHeight(),
					 wH5 = $(window).height(),
					 wS5 = $(this).scrollTop(),
					 windowWidth = $(window).width();

				$('.headline5').addClass('invisible');

				if (Math.round(wS5) < (Math.round(hT5+hH5-wH5-100))){
					$('.headline5').removeClass('animated fadeIn');
					$('.headline5').addClass('invisible');
				}

				if (Math.round(wS5) > (hT5+hH5-wH5-100)){
					$('.headline5').removeClass('invisible');
					$('.headline5').addClass('animated fadeIn');
				}

			}
		});

		$('.button').hover(
		function(){$(this).toggleClass('animated pulse');}
		);

	});

</script>
</body>
</html>
