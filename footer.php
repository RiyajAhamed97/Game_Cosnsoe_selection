

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Bootstrap-JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script src="js/responsiveslides.min.js"></script>
	<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						nav: true,
						speed: 2000,
						namespace: "callbacks",
						pager: true,
					});
				});
			</script>

	<script src="js/cbpFWTabs.js"></script>
	<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>

	<script src="js/owl.carousel.js"></script>
	<script>
				$(document).ready(function() {
					$("#owl-demo, #owl-demo1, #owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
						autoPlay: 3000,
						items : 5,
						itemsDesktop : [1024,4],
						itemsDesktopSmall : [414,3]
					});
				});
			</script>

	<script src="js/waypoints.min.js"></script>
	<script src="js/counterup.min.js"></script>
	<script>
				jQuery(document).ready(function( $ ) {
					$('.counter').counterUp({
						delay: 10,
						time: 1000
					});
				});
			</script>



	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
				$(function() {
					$('.w3portfolioaits-item a').Chocolat();
				});
			</script>

	<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>






</body>

</html>