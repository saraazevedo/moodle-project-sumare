<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>client</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- build:css(.tmp) styles/main.css -->
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/docs/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/docs/assets/css/bootstrap-responsive.css">
	<!-- endbuild -->
	<!-- build:js scripts/vendor/modernizr.js -->
	<script src="bower_components/modernizr/modernizr.js"></script>
	<!-- endbuild -->
</head>
<body>
	<!--[if lt IE 10]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<h3 class="text-muted">Project name</h3>
		</div>

		<div class="jumbotron">
			<h1>Jumbotron heading</h1>
			<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="btn btn-lg btn-success" href="#">Sign up today</a></p>
		</div>

		<div class="row marketing">
			<div class="col-lg-6">
				<h4>Subheading</h4>
				<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

				<h4>Subheading</h4>
				<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

				<h4>Subheading</h4>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			</div>

			<div class="col-lg-6">
				<h4>Subheading</h4>
				<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

				<h4>Subheading</h4>
				<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

				<h4>Subheading</h4>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			</div>
		</div>

		<div class="footer">
			<p>&copy; Company 2013</p>
		</div>

	</div> <!-- /container -->

	<!-- build:js scripts/vendor.js -->
	<!-- bower:js -->
	<script src="bower_components/jquery/jquery.min.js"></script>
	<script src="bower_components/bootstrap/docs/assets/js/bootstrap.min.js"></script>
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