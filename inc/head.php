<head>
	<!-- Config Load -->
	<?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/config.php";
	   include_once($path);
	?>
	<!-- Characters/Rendering -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- SEO -->
	<title><?php echo $site_title; ?> | <?php echo $page_title;?></title>
	<meta name="description" content="Chicago History Museum presents: The Secret Lives of Objects. — Pulled from the darkened shelves and hidden crates of the Museum's collection storage rooms, we're finally getting our chance in the spotlight...and we have some pretty remarkable stories to tell.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://secretlivesobjects.com">
    <meta property="og:image" content="http://secretlivesobjects.com/fb.jpg">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,400italic|Oswald:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/<?php cachebust('style.css'); ?>">
	<link rel="stylesheet" href="/plugins/masterslider/style/masterslider.css" />
	<link rel="stylesheet" href="/plugins/masterslider/skins/default/style.css" />
	<link rel="stylesheet" href="/<?php cachebust('shame.css'); ?>">
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-55316957-2', 'auto');
	  ga('send', 'pageview');

	</script>
</head>