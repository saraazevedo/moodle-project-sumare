	<!-- build:js scripts/vendor.js -->
	<!-- bower:js -->
	<script src="bower_components/jquery/jquery.js"></script>
	<!-- endbower -->
	<!-- endbuild -->

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>

	<!-- build:js scripts/main.js -->
	<script data-main="scripts/main" src="bower_components/requirejs/require.js"></script>
	<!-- endbuild -->
</body>
</html>