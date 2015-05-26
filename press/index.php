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
					<a href="http://www.chicagotribune.com/entertainment/museums/ct-secret-lives-of-objects-20150325-column.html" target="_blank">
						<h2>Chicago Tribune</h2>
						<h3>If these objects could talk&#8230;</h3>
					</a>
				</article>
				<article class="right-col">
					<a href="http://www.dnainfo.com/chicago/20150316/old-town/chaplins-cane-civil-war-ending-table-showcased-history-museum-exhibit" target="_blank">
						<h2>DNAinfo</h2>
						<h3>Priceless Civil War Artifacts On Display at History Museum</h3>
					</a>
				</article>
				<article class="left-col">
					<a href="http://wgntv.com/2015/03/21/secret-lives-of-objects-exhibit-opens-at-chicago-history-museum/" target="_blank">
						<h2>WGN TV</h2>
						<h3>Chicago history, and the lives of things</h3>
					</a>
				</article>
				<article class="right-col">
					<a href="http://www.examiner.com/article/exhibitions-focusing-on-modern-and-historic-art-are-currently-on-display" target="_blank">
						<h2>Examiner</h2>
						<h3>Exhibitions focusing on modern & historic artifacts&#8230;</h3>
					</a>
				</article>
				<article class="left-col">
					<a href="http://abc7chicago.com/entertainment/roz-varons-weekender-report/98329/" target="_blank">
						<h2>ABC7 Chicago</h2>
						<h3>Roz Varon's Weekender Report</h3>
					</a>
				</article>
				<!-- <article class="left-col">
					<a href="" target="_blank">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article>
				<article class="right-col">
					<a href="" target="_blank">
						<h2>Name of publication</h2>
						<h3>Name of article</h3>
					</a>
				</article> -->
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