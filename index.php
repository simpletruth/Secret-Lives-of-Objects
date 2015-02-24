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

		<!-- ///// INTRO SECTION  ///// -->

	<section class="intro" id="section-intro">
		<div class="image-bg" data-stellar-background-ratio="0.2"></div>
		<div class="color-overlay"></div>
		<div class="container">

			<div class="logo">
				<a href="index.html"><h1><img src="img/logo-white.png" alt="logo"></h1></a>
			</div>
			<h3>Neat is a lightning quick landing page built on the cutting edge Bourbon Neat framework.</h3>
		</div>

		<!-- the 'jump down' button to scroll to next section -->
		<a href="#section-features" class="jump-down"><i class="fa fa-chevron-down"></i></a>
	</section>



	<!-- ///// FEATURES SECTION ///// -->

	<section class="features" id="section-features">
		<div class="container">

			<div class="title">
				<h2>Features</h2>
				<hr class="small">
				<p>Why should you go with Neat? Here are a few good reasons.</p>
			</div>

			<div class="feature-items">

				<div class="feature-item">
					<i class="fa fa-tachometer"></i>
					<h4>Built For Speed</h4>
					<p>The code base behind Neat is super light and optimised to load faster than fast.</p>
				</div>

				<div class="feature-item">
					<i class="fa fa-cogs"></i>
					<h4>Coded with Clean Sass </h4>
					<p>Styles are organised in partial Sass files, for a modular and efficient framework.</p>
				</div>

				<div class="feature-item">
					<i class="fa fa-paper-plane"></i>
					<h4>No Useless Bloat</h4>
					<p>Neat is simple and straight to the point. No bloat, mass features to slow you down.</p>
				</div>

				<div class="feature-item">
					<i class="fa fa-child"></i>
					<h4>Future Proof</h4>
					<p>Ride a cutting edge, next generation front-end framework with Bourbon Neat.</p>
				</div>

				<div class="feature-item">
					<i class="fa fa-heart"></i>
					<h4>Crafted with Passion</h4>
					<p>This template was design with a genuine desire to make your brand look good.</p>
				</div>

				<div class="feature-item">
					<i class="fa fa-life-ring"></i>
					<h4>Friendly Support</h4>
					<p>Built by an author that takes customer satisfaction serioulsy, you're in good hands.</p>
				</div>

			</div>

		</div>
	</section>



	<!-- ///// NEWSLETTER SECTION ///// -->

	<section class="newsletter">
		<div class="image-bg" data-stellar-background-ratio="0.5"></div>
		<div class="color-overlay"></div>
		<div class="container">

			<div class="nl-text">
				<p>Want to be the first to be notified when we're releasing a cool new product? Sign up here, we won't spam!</p>
			</div>

			<div class="nl-form">

				<!-- newsletter form -->
				<form id="newsletter" novalidate>
					<input type="email" name="e-mail" id="e-mail" placeholder="Your e-mail address" required>
					<input class="button" type="submit" value="Submit">
			    </form>

			    <div id="newsletter-error"></div>
			</div>

		</div>
	</section>



	<!-- ///// SHOWCASE SECTION ///// -->

	<section class="showcase" id="section-showcase">
		<div class="container">

			<div class="title">
				<h2>Showcase</h2>
				<hr class="small">
				<p>Words are nice and all, but come on.. Time for some visual proof!</p>
			</div>

			<!-- image slider -->
			<div class="split">
				<div class="split-left split-text">

					<h4>Touch Enabled Image Slider</h4>
					<p class="lead">Sliders are nice, especially when you can flick across them with your finger or mouse.</p>
					<p>Create beautiful responsive, touch enabled content sliders with the wonderful <a href="http://owlgraphic.com/owlcarousel/" target="_blank">Owl Carousel</a> jQuery plugin.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis. Ullam dolor repellat molestias quisquam commodi distinctio nam hic ratione architecto!</p>
					<p>Fugiat, expedita dolore consequuntur ducimus nulla ex maxime.</p>

					<a href="http://themeforest.net/user/simonswiss/portfolio" class="button large">Buy This Template</a>
					&nbsp;
					<a href="#section-contact" class="button large alt">Get in Touch</a>

				</div>

				<div class="split-right split-media">

					<div id="showcase-slider" class="owl-carousel owl-theme">

					  	<!-- slider items -->
					  	<div class="item"><img src="http://placehold.it/800x550&amp;text=use+your+image+here" alt="Slider Image 1"></div>
					  	<div class="item"><img src="http://placehold.it/800x550&amp;text=use+your+image+here" alt="Slider Image 2"></div>
					  	<div class="item"><img src="http://placehold.it/800x550&amp;text=use+your+image+here" alt="Slider Image 2"></div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="showcase gray">
		<div class="container">

			<!-- video example -->
			<div class="split">
				<div class="split-left split-text float-right">

					<h4>Video Presentation</h4>
					<p class="lead">What better ways to showcase your products and services than using a presentation video?</p>
					<p>While you're at it, here's a nice little introduction to the awesome <a href="http://neat.bourbon.io/" target="_blank">Bourbon Neat framework</a> - it will show you how you can skip all the CSS classes from other popular front-end frameworks.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis.</p>

				</div>

				<div class="split-right split-media float-left">

					<div class="fitvids">
						<!-- responsive video iframe -->
				      	<iframe width="560" height="315" src="http://www.youtube.com/embed/P8wyUq5Z3Kw" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="showcase">
		<div class="container">

			<!-- single image example -->
			<div class="split">
				<div class="split-left split-text">

						<h4>The Good Ol' Plain Image</h4>
						<p class="lead">Of course, sometimes a good ol' single image is still the best solution.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis. Ullam dolor repellat molestias quisquam commodi distinctio nam hic ratione architecto!</p>
						<p>Fugiat, expedita dolore consequuntur ducimus nulla ex maxime.</p>

				</div>

				<div class="split-right split-media">

					<!-- insert your image here -->
					<img src="http://placehold.it/800x350&amp;text=use+your+image+here" alt="">

				</div>
			</div>
		</div>
	</section>



	<!-- ///// QUOTE SECTION ///// -->

	<section class="quote">
		<div class="image-bg" data-stellar-background-ratio="0.5"></div>
		<div class="color-overlay"></div>
		<div class="container">

			<div id="quote-slider" class="owl-carousel owl-theme">

				<div class="item">

				  	<!-- quote text -->
				  	<blockquote>Say what you want about having 5 amazing sliders or 1,000+ layout shortcodes.. This template just works, and it works super fast. I'm taking that over bloatware any day of the week!

					<!-- quote author -->
					<cite>Joshua Sparks, <a href="#">Freelance Magazine</a></cite></blockquote>

				</div>

			   	<div class="item">

			  		<!-- quote text -->
			  		<blockquote>Hmmm... Wow! I've been working with a lot of templates, but i was pleasantly surprised with this one. The amount of CSS is minimal, and very well organised. Nice!

					<!-- quote author -->
					<cite>Samantha Smith, <a href="#">Mum Entrepreneur</a></cite></blockquote>

			  	</div>
			</div>
		</div>
	</section>



	<!-- ///// BLOG SECTION ///// -->

	<section class="blog" id="section-blog">
		<div class="container">

			<div class="title">
				<h2>Latest News</h2>
				<hr class="small">
				<p>We share crunchy details on a regular basis - here are our latest posts.</p>
			</div>

			<div id="blog-teasers" class="owl-carousel owl-theme">

				<!-- standard post format -->
				<div class="blog-item">
					<a class="featured-image" href="single-standard.html">
						<img src="http://placehold.it/800x600" alt="Featured Image">
					</a>

					<div class="blog-teaser">
						<h4 class="post-title"><a href="single-standard.html">Standard Post</a></h4>
						<div class="meta">
							by <span class="autor"><a href="#">admin</a></span> on <span class="date"><a href="#">18th August 2014</a></span>
						</div>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis.</p>
						<a href="single-standard.html" class="read-more">Read More &raquo;</a>
					</div>
				</div>

				<!-- image post format -->
				<div class="blog-item">
					<a class="featured-image" href="single-image.html">
						<img src="http://placehold.it/800x600" alt="Featured Image">
					</a>

					<div class="blog-teaser">
						<h4 class="post-title"><a href="single-image.html">Image Post</a></h4>
						<div class="meta">
							by <span class="autor"><a href="#">admin</a></span> on <span class="date"><a href="#">18th August 2014</a></span>
						</div>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis.</p>
						<a href="single-image.html" class="read-more">Read More &raquo;</a>
					</div>
				</div>

				<!-- gallery post format -->
				<div class="blog-item">

					<div id="gallery-slider" class="flexslider">

						<ul class="slides">
							<!-- slider items -->
						  	<li><img src="http://placehold.it/800x600" alt="Slider Image 1"></li>
						  	<li><img src="http://placehold.it/800x600" alt="Slider Image 2"></li>
						  	<li><img src="http://placehold.it/800x600" alt="Slider Image 2"></li>
						</ul>

					</div>

					<!--
					<a class="featured-image" href="single-gallery.html">
						<img src="http://preview.simonswiss.com/neat/img/slide2.jpg" alt="Featured Image">
					</a> -->

					<div class="blog-teaser">
						<h4 class="post-title"><a href="single-gallery.html">Gallery Post</a></h4>
						<div class="meta">
							by <span class="autor"><a href="#">admin</a></span> on <span class="date"><a href="#">18th August 2014</a></span>
						</div>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis.</p>
						<a href="single-gallery.html" class="read-more">Read More &raquo;</a>
					</div>
				</div>

				<!-- video post format -->
				<div class="blog-item">

					<div class="fitvids">
						<!-- responsive video iframe -->
				      	<iframe width="560" height="315" src="http://www.youtube.com/embed/P8wyUq5Z3Kw" allowfullscreen></iframe>
					</div>


					<div class="blog-teaser">
						<h4 class="post-title"><a href="single-video.html">Video Post</a></h4>
						<div class="meta">
							by <span class="autor"><a href="#">admin</a></span> on <span class="date"><a href="#">18th August 2014</a></span>
						</div>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis.</p>
						<a href="single-video.html" class="read-more">Read More &raquo;</a>
					</div>
				</div>

				<!-- quote post format -->
				<div class="blog-item">

					<div class="quote-format">
						<a href="single-quote.html">
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam et, possimus nihil officia.</blockquote>
						</a>
					</div>

					<div class="blog-teaser">
						<h4 class="post-title"><a href="single-quote.html">Quote Post</a></h4>
						<div class="meta">
							by <span class="autor"><a href="#">admin</a></span> on <span class="date"><a href="#">18th August 2014</a></span>
						</div>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis.</p>
						<a href="single-quote.html" class="read-more">Read More &raquo;</a>
					</div>
				</div>

				<!-- audio post format -->
				<div class="blog-item">

					<iframe height="200" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/13172711&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

					<div class="blog-teaser audio">
						<h4 class="post-title"><a href="single-audio.html">Audio Post</a></h4>
						<div class="meta">
							by <span class="autor"><a href="#">admin</a></span> on <span class="date"><a href="#">18th August 2014</a></span>
						</div>
						<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, amet, perspiciatis.</p>
						<a href="single-audio.html" class="read-more">Read More &raquo;</a>
					</div>
				</div>

			</div>

			<a href="archive.html" class="button">View All Posts</a>

		</div>
	</section>



	<!-- ///// CONTACT SECTION ///// -->

	<section class="contact" id="section-contact">
		<div class="container">

			<div class="title">
				<h2>Contact</h2>
				<hr class="small">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>

			<div class="contact-form">

				<!-- contact form -->
				<form id="contact-form" novalidate>

					<div class="form">
						<div class="form-left">

					    	<p><label for="name">Name</label>
					    	<input type="text" name="name" id="name" placeholder="Name..."></p>

					    	<p><label for="email">Email</label>
					    	<input type="email" name="email" id="email" placeholder="E-mail..."></p>

					        <p><label for="phone">Phone</label>
					        <input type="text" name="phone" id="phone" placeholder="Phone number..."></p>

					    </div>

						<div class="form-right">

					    	<p><label for="message">Message</label>
					    	<textarea name="message" id="message" rows="10" placeholder="Your message..."></textarea></p>

					    </div>
					</div>

					<div id="contact-error"></div>

					<p class="submit"><input class="button" type="submit" value="Submit"></p>

			    </form><!-- end form -->

			</div>
		</div>
	</section>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/js.php');  ?>
    <?php include('inc/analytics.php');  ?>

</body>
</html>