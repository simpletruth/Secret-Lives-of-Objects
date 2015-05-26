<?php $page_title = 'Home'; ?>
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
<body class="index">

    <?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/ie6.php";
	   include_once($path);
	?>
    <?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/header.php";
	   include_once($path);
	?>

	<section id="intro">
		<div class="container">

			<div class="master-slider ms-skin-default" id="masterslider">
			    <div class="ms-slide" data-fill-mode="fit" data-delay="6">
			        <img src="plugins/masterslider/blank.gif" data-src="img/slide-cane.jpg" alt="Item #416" />
			        <div class="ms-layer ms-caption" data-resize="false">
			        	<span class="item">Item #416</span>
			        	<span class="riddle">I helped a "Little Tramp" stand tall.</span>
			        </div>
			        <div class="ms-layer ms-reveal" data-resize="false" data-effect="bottom(0|100 , true)" data-delay="2000">
			            <span class="answer">Charlie Chaplin’s bamboo cane, c. 1915</span>
			        </div>
			    </div>

			    <div class="ms-slide" data-fill-mode="fit" data-delay="6">
			       <img src="plugins/masterslider/blank.gif" data-src="img/slide-desk.jpg" alt="Item #1,865" />
			        <div class="ms-layer ms-caption" data-resize="false"  data-delay="0">
			        	<span class="item">Item #1,865</span>
			        	<span class="riddle">I witnessed the end of America's darkest chapter.</span>
			        </div>
			        <div class="ms-layer ms-reveal" data-resize="false"  data-effect="bottom(0|100 , true)" data-delay="2000">
			            <span class="answer">Table from Wilmer McLean’s house in Appomattox Court House, Virginia, c. 1860</span>
			        </div>
			    </div>

			    <div class="ms-slide" data-fill-mode="fit" data-delay="6">
			        <img src="plugins/masterslider/blank.gif" data-src="img/slide-badge.jpg" alt="Item #6,876" />
			        <div class="ms-layer ms-caption" data-resize="false">
			        	<span class="item">Item #6,876</span>
			        	<span class="riddle">I helped an alderman look the part.</span>
			        </div>
			        <div class="ms-layer ms-reveal" data-resize="false" data-effect="bottom(0|100 , true)" data-delay="2000">
			            <span class="answer">Badge given to First Ward Alderman Michael “Hinky Dink” Kenna, 1897</span>
			        </div>
			    </div>

			    <div class="ms-slide" data-fill-mode="fit" data-delay="6">
			        <img src="plugins/masterslider/blank.gif" data-src="img/slide-revolver.jpg" alt="Item #521" />
			        <div class="ms-layer ms-caption" data-resize="false">
			        	<span class="item">Item #1,456</span>
			        	<span class="riddle">I raided Harper's Ferry.</span>
			        </div>
			        <div class="ms-layer ms-reveal" data-resize="false" data-effect="bottom(0|100 , true)" data-delay="2000">
			            <span class="answer">Owen Brown’s Colt revolver, c. 1856</span>
			        </div>
			    </div>

			    <div class="ms-slide" data-fill-mode="fit" data-delay="6">
			        <img src="plugins/masterslider/blank.gif" data-src="img/slide-glasses.jpg" alt="Item #1,456" />
			        <div class="ms-layer ms-caption" data-resize="false">
			        	<span class="item">Item #521</span>
			        	<span class="riddle">I brought two killers to justice.</span>
			        </div>
			        <div class="ms-layer ms-reveal" data-resize="false" data-effect="bottom(0|100 , true)" data-delay="2000">
			        	<span class="answer">Nathan F. Leopold Jr.’s eyeglasses, c. 1924</span>
			        </div>
			    </div>
			    <!-- end of slide -->

			</div>
			<!-- end of masterslider -->

		</div>

		<!-- the 'jump down' button to scroll to next section -->
		<!-- <a href="#section-features" class="jump-down"><i class="fa fa-chevron-down"></i></a> -->
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
					<p>Pulled from the darkened shelves and hidden crates of the Museum's collection storage rooms, we're finally getting our chance in the spotlight&#8230;and we have some pretty remarkable stories to tell.</p>
					<p>We're from around the city, across the country, and throughout history. Some of us have survived the years unscathed, while some are proud of our hard-earned dings and dents. We all have our secrets, and together we've made history.</p>
					<p>Stop by and see for yourself.</p>
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
					<p><strong>Access to this exhibition is included <br>with Museum admission</strong><br>
					$14 adults<br>
					$12 seniors/students<br>
					Free for children 12 and under
					</p>
				</div>
				<div class="col">
					<h3>Hours</h3>
					<p>
						<strong>Monday to Saturday</strong><br>
						9:30 AM to 4:30 <span class="time">PM</span>
					</p>
					<p>
						<strong>Sunday</strong><br>
						Noon to 5:00 <span class="time">PM</span>
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
						Visa, MasterCard, and Discover accepted <i>&mdash;</i> complimentary for Premium members!
					</p>
					<a href="https://www.google.com/maps/place/Chicago+History+Museum+Parking/@41.9135369,-87.6324362,18z/data=!4m7!1m4!3m3!1s0x880fd343bd18fb6d:0x4f731cdb732d79d1!2sChicago+History+Museum!3b1!3m1!1s0x880fd3426bde9bd1:0x2e9a69ea1b20bb4d" class="black-button" target="_blank">Parking directions</a>
				</div>
				<div class="full group-tours">
					<p><strong>Want to bring a large group?</strong> Special discounted group rates available. Call 312-799-2162 or e-mail <a href="mailto:&#103;&#114;&#111;&#117;&#112;&#116;&#111;&#117;&#114;&#115;&#064;&#099;&#104;&#105;&#099;&#097;&#103;&#111;&#104;&#105;&#115;&#116;&#111;&#114;&#121;&#046;&#111;&#114;&#103;" target="_blank">&#103;&#114;&#111;&#117;&#112;&#116;&#111;&#117;&#114;&#115;&#064;&#099;&#104;&#105;&#099;&#097;&#103;&#111;&#104;&#105;&#115;&#116;&#111;&#114;&#121;&#046;&#111;&#114;&#103;</a> for details.</p>
				</div>
			</div>
		</section>

		<section id="member-events">
			<div class="container">
					<h2>Want exclusive access?</h2>
					<p>Save on the perks of a museum membership, available for a limited time.</p>
					<a href="/join/#membership-matters" class="membership-button">Become a member</a>
			</div>
		</section>

		<section id="social">
			<div class="tilted-background"></div>
			<div class="container">
				<div class="left-col">
					<h2>#SecretObjects</h2>
					<h3>Want to share our secrets? No problem.</h3>
				</div>
				<div class="right-col">
					<a href="http://www.facebook.com/share.php?u=secretlivesobjects.com" class="facebook social" target="_blank"><?php include('img/facebook.svg.php'); ?></a>
					<a href="https://twitter.com/share?text=Uncovering%20secrets%20about%20Chicago%27s%20unexpected history at%20@ChicagoMuseum%20%23SecretObjects&url=http://secretlivesobjects.com" class="twitter social" target="_blank"><?php include('img/twitter.svg.php'); ?></a>
					<a href="https://instagram.com/chicagomuseum/" class="instagram social" target="_blank"><?php include('img/instagram.svg.php'); ?></a>
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
				<a href="/press/" class="yellow-button">Press room</a>
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
	<script>
		var slider = new MasterSlider();
		slider.setup('masterslider', {
		        width:1086,
		        height:720,
		        space:0,
		        autoplay:true,
		        loop:true,
		        overPause:false,
		        speed:30,
		        shuffle:'true',
		        view:'mask'
		    });
	</script>
    <?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/inc/analytics.php";
	   include_once($path);
	?>

</body>
</html>