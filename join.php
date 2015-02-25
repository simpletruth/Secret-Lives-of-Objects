<?php $page_title = 'Join'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php include('inc/head.php'); ?>
<body class="<?php echo $body_class ?>">

    <?php include('inc/ie6.php'); ?>
    <?php include('inc/header.php'); ?>

		<section class="intro" id="section-intro">
			<div class="image-bg" data-stellar-background-ratio=".8"></div>
			<div class="container">
				<div class="logo">
					<a href="/"><h1><img src="img/logo-white.png" alt="logo"></h1></a>
				</div>
				<h3>Neat is a lightning quick landing page built on the cutting edge Bourbon Neat framework.</h3>
			</div>

			<!-- the 'jump down' button to scroll to next section -->
			<a href="#section-features" class="jump-down"><i class="fa fa-chevron-down"></i></a>
		</section>

	<div id="master-container">

		<section id="membership-matters">
			<div class="tilted-background"></div>
			<div class="container">
				<div class="right-col">
					<div class="left-sub-col">
						<strong>Premium Memberships</strong>
						<ul>
							<li>Unlimited free access for 2 or 4 people</li>
							<li>VIP discounts for gift shop, café, and events</li>
							<li>Free parking every visit</li>
							<li>Special guest passes for family and friends</li>
							<li>ALL benefits of Core members</li>
						</ul>
					</div>
					<div class="right-sub-col">
						<strong>Core Memberships</strong>
						<ul>
							<li>Unlimited free access for 2 or 4 people</li>
							<li>Research Center admissions</li>
							<li>Invitations to annual member events</li>
							<li>Exclusive member previews</li>
							<li>Access to members-only parking</li>
						</ul>
					</div>
					<div class="full-sub-col">
						<a href="#compare">Compare plan benefits on the chart below &raquo;</a>
					</div>
				</div>

			</div>
		</section>

		<section id="compare">
			<div class="container">
				<h2>Member events</h2>
				<article class="left-col">
					<h3>Tales from the archives</h3>
					<p>The Museum's chief historian, Russell Lewis, and curator John Russick reveal previously undisclosed secrets about the 22,000,000 artifacts and documents in our collection.</p>
					<p><em>Tuesday, May 19, 6:00-7:30 PM <br>$20 members, $25 guests. RSVP required.</em></p>
					<a href="" class="yellow-button" target="_blank">Get tickets</a>
				</article>
				<article class="right-col">
					<h3>Event preview: For Your Eyes Only</h3>
					<p>Museum members can enjoy exclusive access to a preview of The Secret Lives of Objects. We’ve handpicked this eclectic mix of artifacts from our extensive collection. Each one bears witness to history in its own remarkable way.</p>
					<p><em>Saturday, March 21, 9:00–9:30 AM <br>Sunday, March 22, 11:00 AM–12:00 noon <br>Free for members. Reservations required. Coffee service and pastries included.</em></p>
					<a href="" class="yellow-button" target="_blank">Members: RSVP here</a>
				</article>
				<div class="full">
					<a href="" class="membership-button" target="_blank">Want exclusive access? <span>Become a member.</span></a>
				</div>
			</div>
		</section>

		<section id="social">
			<div class="tilted-background"></div>
			<div class="container">
				<div class="left-col">
					<h2>#SecretLives</h2>
					<h3>What to share our secrets? No problem.</h3>
				</div>
				<div class="right-col">
					<a href="" class="facebook social" target="_blank"><?php include('img/facebook.svg.php'); ?></a>
					<a href="" class="twitter social" target="_blank"><?php include('img/twitter.svg.php'); ?></a>
					<a href="" class="instagram social" target="_blank"><?php include('img/instagram.svg.php'); ?></a>
				</div>
			</div>
		</section>

		<section id="special-thanks">
			<div class="container">
				<h2>Special thanks</h2>
				<div class="left-col">
					<div class="img-wrap">
						<img src="img/manual-cinema.png" alt="Manual Cinema">
					</div>
					<p><a href="http://manualcinema.com/" target="blank">Manual Cinema</a> will bring various secrets to life through a combination of handmade shadow puppetry, cinematic motifs, and original sound effects and music.</p>
				</div>
				<div class="right-col">
					<div class="img-wrap">
						<?php include('img/cpd.svg.php'); ?>
					</div>
					<p>The Chicago History Museum gratefully acknowledges the support of the Chicago Park District on behalf of the people of Chicago.</p>
				</div>
			</div>
		</section>

		<section id="press">
			<div class="tilted-background"></div>
			<div class="container">
				<h2>Even our secrets have secrets</h2>
				<p>Visit our press room to learn more about <em>The Secret Lives of Objects.</em></p>
				<a href="" class="yellow-button">Press Room</a>
			</div>
		</section>

	</div>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/js.php');  ?>
    <?php include('inc/analytics.php');  ?>

</body>
</html>