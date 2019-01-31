<!-- footer -->
<footer>
	<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-3 col-md-3 py-5">
					<h5>Nous Contacter</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fab fa-whatsapp"></i>+23145678</a></li>
						<li><a href="javascript:void();"><i class="fa fa-phone"></i>+232586848</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 py-5">
					<h5>A Propos</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-col-xs-12 col-sm-3 col-md-3 py-5">
					<h5>Equipe de développement</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>eugenendjaka@gmail.com</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>armelsauvy@gmail.com</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>loicsanou@gmail.com</a></li>
						
					
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 py-5">
					<h5>Nos Services</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Formation en sécurité et surété</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Commerce géneral</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>import-export</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Agro alimentaire</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Audit et conseils</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Prestations de service</a></li>
						
					</ul>
				</div>
			</div>
	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p class="h6">&copy 2018 Copyright.<a class="text-green ml-2" href="groupelekombiinternational.com" target="_blank">groupelekombiinternational</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
</footer>
<!-- //footer -->

	<!-- js -->	
	<script src="/web/js/jquery-2.1.4.min.js"></script>
	<script src="/web/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Banner Responsiveslides -->
	<script src="/web/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsiveslides -->

	<!-- start-smoth-scrolling -->
	<script src="/web/js/SmoothScroll.min.js"></script>
	<script src="/web/js/move-top.js"></script>
	<script src="/web/js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>