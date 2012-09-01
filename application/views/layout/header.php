<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
	<base href="<?php echo base_url();?>">
  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>IdeaBook</title>
  <meta name="description" content="IdeaBook">
  <meta name="author" content="Upanels Inc.">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="assets/js/libs/modernizr-2.0.6.min.js"></script>
<script src="https://connect.facebook.net/en_US/all.js#appId=311371812294772&xfbml=1"></script>
<script type="text/javascript" charset="utf-8">
	window.fbAsyncInit = function() {
		FB.Event.subscribe('auth.logout', function(r)
		    {
					FB.logout();
					window.location.href = '<?php echo site_url("welcome/action/logout") ?>'
					
					alert('logout');
		    }
		);
		FB.Event.subscribe('auth.login', function(r)
		    {
					alert('login');
		    }
		);
	};
</script>
</head>
<body>
	<div id="container">
    <header>
		<div id="header">
			<img src="assets/img/logo.png" alt="ideabook"/>
		</div>
    </header>