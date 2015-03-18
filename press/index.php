<?php $page_title = 'Press'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/inc/head.php";
   include_once($path);
?>
<body class="press">

    <?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/ie6.php";
	   include_once($path);
	?>
	<header id="navigation" class="navigation headroom">
		<div class="navigation-wrapper">

			<!-- logo - you can put yours here -->
			<a href="/" class="logo">
				<span id="secret-lives">
				    <?php
					   $path = $_SERVER['DOCUMENT_ROOT'];
					   $path .= "/img/secret-lives-logo.svg.php";
					   include_once($path);
					?>
				</span>
			</a>
			<a href="http://chicagohistory.org" class="chm-logo">
				<span id="chm">
					<?php
					   $path = $_SERVER['DOCUMENT_ROOT'];
					   $path .= "/img/chm.svg.php";
					   include_once($path);
					?>
				</span>
			</a>

			<a href="/" class="back-to-home">&#8592; <span>Back to </span>main<span> site</span></a>

		</div>
	</header>
	<section id="section-intro">
	</section>

	<div id="master-container">

		<section id="press-room">
			<div class="container">
				<h1>Press Room</h1>
				<article class="left-col">
					<a href="">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article>
				<article class="right-col">
					<a href="">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article>
				<article class="left-col">
					<a href="">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article>
				<article class="right-col">
					<a href="">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article>
				<article class="left-col">
					<a href="">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article>
				<article class="right-col">
					<a href="">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article>
			</div>
		</section>

	</div>

     <?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/footer.php";
	   include_once($path);
	?>
    <?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/js.php";
	   include_once($path);
	?>
    <?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/analytics.php";
	   include_once($path);
	?>

</body>
</html>