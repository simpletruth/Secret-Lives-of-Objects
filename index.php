<?php $page_title = 'Home'; ?>
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
			<div class="image-bg" data-stellar-background-ratio="0.2"></div>
			<div class="color-overlay"></div>
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

		<section id="about">
			<div class="container">
				<div class="right-col">
					<?php include('img/secret-lives-logo.svg.php'); ?>
				</div>
				<div class="middle-col">&nbsp;</div>
				<div class="left-col">
					<h2>Want to hear a story? <span>We've got plenty to tell.</span></h2>
					<p>Pulled from the darkened shelves and hidden crates of the Museum's collection storage rooms, we're finally getting our chance in the spotlight...and we have some pretty remarkable stories to tell.</p>
					<p>We're from around the city, across the country, and throughout history. Some of us have survived the years unscathed, while some are proud of our hard-earned dings and dents. We all have our secrets, and together we've made history.</p>
					<p>Come on in and see for yourself.</p>
					<p>Sincerely,<br>
					<span class="signature"><?php include('img/signature.svg.php'); ?></span></p>
				</div>
			</div>
		</section>

		<section id="info">
			<div class="tilted-background"></div>
			<div class="container">
				<div class="col">
					<h3>Admission</h3>
					<p><strong>Access to this exhibit is included <br>with Museum admission</strong><br>
					$14 adults<br>
					$12 seniors/students<br>
					Free to children 12 and under
					</p>
				</div>
				<div class="col">
					<h3>Hours</h3>
					<p>
						<strong>Monday to Saturday</strong><br>
						9:30 AM to 4:30 PM
					</p>
					<p>
						<strong>Sunday</strong><br>
						Noon to 5:00 PM
					</p>
				</div>
				<div class="col">
					<h3>Location</h3>
					<p>
						<strong>Chicago History Museum</strong><br>
						1601 N. Clark Street<br>
						Chicago, IL 60614
					</p>
					<a href="https://www.google.com/maps/place/Chicago+History+Museum/@41.91199,-87.631526,18z/data=!3m1!4b1!4m2!3m1!1s0x880fd343bd18fb6d:0x4f731cdb732d79d1" class="black-button" target="_blank">Museum directions</a>
				</div>
				<div class="col">
					<h3>Parking</h3>
					<p>
						<strong>$9 with Museum validation</strong><br>
						Visa, MasterCard, and Discover accepted &mdash; complimentary for Premium members!
					</p>
					<a href="https://www.google.com/maps/place/Chicago+History+Museum+Parking/@41.9135369,-87.6324362,18z/data=!4m7!1m4!3m3!1s0x880fd343bd18fb6d:0x4f731cdb732d79d1!2sChicago+History+Museum!3b1!3m1!1s0x880fd3426bde9bd1:0x2e9a69ea1b20bb4d" class="black-button" target="_blank">Parking directions</a>
				</div>
			</div>
		</section>

		<section id="member-events">
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
					<img src="img/manual-cinema.png" alt="Manual Cinema">
					<p>Manuel Cinema will bring various secrets to life through a combination of handmade shadow puppetry, cinematic motifs, and original sound effects and music.</p>
				</div>
				<div class="right-col">
					<?php include('img/cpd.svg.php'); ?>
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