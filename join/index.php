<?php $page_title = 'Join'; ?>
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
<body class="join">

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

	<section id="intro">
		<div class="container">

			<div class="master-slider ms-skin-default" id="masterslider">
			    <div class="ms-slide" data-fill-mode="fit" data-delay="999999999999">
			        <img src="/plugins/masterslider/blank.gif" data-src="/img/slide-membership.jpg" alt="Item #416" />
			        <div class="ms-layer ms-caption" data-resize="false">
			        	<span class="answer">Seeking more secrets?</span>
			        </div>
			        <div class="ms-layer ms-reveal" data-resize="false" data-effect="bottom(0|100 , true)" data-delay="3000">
			        	<span class="riddle">Save on the perks of a museum membership, available for a limited time.</span>
			        </div>
			    </div>

			</div>
			<!-- end of masterslider -->

		</div>

		<!-- the 'jump down' button to scroll to next section -->
		<!-- <a href="#section-features" class="jump-down"><i class="fa fa-chevron-down"></i></a> -->
	</section>

	<div id="master-container">

		<section id="membership-matters">
			<div class="tilted-background"></div>
			<div class="container">
				<div class="left-col">
					<h2>Membership Matters</h2>
					<h3>Join the Chicago History Museum Today</h3>
				</div>
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

		<section id="join-by-date">
			<div class="container">
				<div class="left-col">
					<?php include('../img/secret-lives-logo.svg.php'); ?>
				</div>
				<div class="right-col">
					<h2>Join by March 21</h2>
					<h3>and attend the Members-Only Preview of The Secret Lives of Objects</h3>
					<p>Be the first to uncover the secrets of some of our nearly 22 million amazing artifacts! The exhibit will be continually changing, rotating in new treasures and <i>&mdash;</i> thanks to unlimited admissions <i>&mdash;</i> you'll be able to see them all!</p>
					<a href="#">Simple and fast membership sign-up &raquo;</a>
				</div>
			</div>
		</section>
	</div>

		<section id="compare">
			<h2>
				<div class="container">
					Join today for limited-time savings
					<span>Membership discount expires May 19</span>
				</div>
			</h2>

			<div class="table">
				<div class="table-body">

					<div class="tr table-header-row">
						<div class="th td-pad"></div>
						<div class="th desc"></div>
						<div class="th core-2">Core 2</div>
						<div class="th core-4">Core 4</div>
						<div class="th prem-2">Premium 2<span>Best value for 2!</span></div>
						<div class="th prem-4">Premium 4<span>Best value for 4!</span></div>
						<div class="th td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Museum admission</div>
						<div class="td core-2">2</div>
						<div class="td core-4">4</div>
						<div class="td prem-2">2</div>
						<div class="td prem-4">4</div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Research Center admission</div>
						<div class="td core-2">2</div>
						<div class="td core-4">4</div>
						<div class="td prem-2">2</div>
						<div class="td prem-4">4</div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Invitations to annual member events</div>
						<div class="td core-2">2</div>
						<div class="td core-4">4</div>
						<div class="td prem-2">2</div>
						<div class="td prem-4">4</div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Exclusive member previews of exhibition openings</div>
						<div class="td core-2"><b>&bull;</b></div>
						<div class="td core-4"><b>&bull;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Discounts at the Museum Store and North & Clark Café, plus double discount days</div>
						<div class="td core-2"><b>&bull;</b></div>
						<div class="td core-4"><b>&bull;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Member e-newsletter</div>
						<div class="td core-2"><b>&bull;</b></div>
						<div class="td core-4"><b>&bull;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Access to members-only parking spaces</div>
						<div class="td core-2"><b>&bull;</b></div>
						<div class="td core-4"><b>&bull;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Access to members lounge at select events</div>
						<div class="td core-2"><b>&bull;</b></div>
						<div class="td core-4"><b>&bull;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Subscription to Chicago History magazine</div>
						<div class="td core-2"><b>&nbsp;</b></div>
						<div class="td core-4"><b>&nbsp;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Free parking on Museum visits</div>
						<div class="td core-2"><b>&nbsp;</b></div>
						<div class="td core-4"><b>&nbsp;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">Priority registration for select programs and ticketed events</div>
						<div class="td core-2"><b>&nbsp;</b></div>
						<div class="td core-4"><b>&nbsp;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr">
						<div class="td td-pad"></div>
						<div class="td desc">One-time use Museum passes to share with friends and family</div>
						<div class="td core-2"><b>&nbsp;</b></div>
						<div class="td core-4"><b>&nbsp;</b></div>
						<div class="td prem-2"><b>&bull;</b></div>
						<div class="td prem-4"><b>&bull;</b></div>
						<div class="td td-pad"></div>
					</div>
					<div class="tr pricing">
						<div class="td td-pad"></div>
						<div class="td desc"></div>
						<div class="td core-2">
							<span class="strike">$70<i></i></span>
							<span class="cost">$59</span>
							<a href="#" class="join-button">Join now</a>
						</div>
						<div class="td core-4">
							<span class="strike">$90<i></i></span>
							<span class="cost">$79</span>
							<a href="#" class="join-button">Join now</a>
						</div>
						<div class="td prem-2">
							<span class="strike">$100<i></i></span>
							<span class="cost">$89</span>
							<a href="#" class="join-button">Join now</a>
						</div>
						<div class="td prem-4">
							<span class="strike">$120<i></i></span>
							<span class="cost">$109</span>
							<a href="#" class="join-button">Join now</a>
						</div>
						<div class="td td-pad"></div>
					</div>

				</div><!-- end .table-body -->
			</div><!-- end .table -->

		</section>

		<section id="member-impact">
			<div class="container">
				<div class="full">
					<h2>Museum members make an impact</h2>
					<p>You help us make Chicago's most important stories less of a secret to over a quarter-million people a year <i>&ndash;</i> including 60,000 schoolchildren. You keep our city learning and growing into the future by empowering us to bring the past to life.</em></p>
					<a href="" class="yellow-button">Join now</a>
				</div>
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