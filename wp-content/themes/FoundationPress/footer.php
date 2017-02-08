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

		$('#headline1').toggleClass('animated fadeIn');

		$('#nav-icon3').click(function(){
			$(this).toggleClass('open');
		});
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

			$('.left').addClass('hide');
			$('.up').addClass('hide');
			$('.right').addClass('hide');



			if (Math.round(wS) < (hT+hH-wH-400)){
				$('.up').removeClass('animated fadeInLeft');
				$('.up').removeClass('animated fadeInUp');
				$('.right').removeClass('animated fadeInRight');
				$('.in').removeClass('animated fadeIn');

				$('.left').addClass('hide');
				$('.up').addClass('hide');
				$('.right').addClass('hide');
				$('.in').addClass('hide');
			}

			if (Math.round(wS) > (hT+hH-wH-400)){
				$('.left').removeClass('hide');
				$('.up').removeClass('hide');
				$('.right').removeClass('hide');
				$('.in').removeClass('hide');

				$('.left').addClass('animated  fadeInLeft');
				$('.up').addClass('animated  fadeInUp');
				$('.right').addClass('animated fadeInRight');
				$('.in').addClass('animated fadeIn');
			}
		}
	});

	$('.button').hover(
	function(){$(this).toggleClass('animated pulse');}
	);


</script>
</body>
</html>
