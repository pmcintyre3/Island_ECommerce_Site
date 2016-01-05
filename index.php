<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!-- HEADER	 -->

<?php 
	require("common.php");

    $pageTitle = "Ship 2 Island";
	$login_info = "";
	$item_count = 0;
	
    include( 'header.php' ); 
?>
		
	<!----start-cursual---->
	<script src="js/responsiveslides.min.js"></script>
	<script>
	// You can also use "$(window).load(function() {"
	$(function () {
	  $("#slider1").responsiveSlides({
		auto: true,
		pager: true,
		nav: true,
		speed: 500,
		namespace: "callbacks",
	  });
	});
	</script>
	<div class="slider-top">
		<div class="wrap">
			<div class="slider">			 
				<ul class="rslides" id="slider1">
					<li>	 
						<div class="da-slide">
							<div class="welcome-to">
								<h2>welcome to aditii</h2>
								<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road.</p>
								<a href="details.html" class="da-link">shop now</a>
							</div>	
							<div class="da-img"><img src="images/slider1.png" alt="image01" /></div>
							<div class="clear"></div>
						</div>
					</li>
					<li>
						<div class="da-slide">
							<div class="welcome-to welcome-to1">
								<h2>Easy management</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast.</p>
									<a href="details.html" class="da-link">shop now</a>
							</div>	
							<div class="da-img da-img1"><img src="images/slider2.png" alt="image01" /></div>
							<div class="clear"></div>
						</div>
					</li>
					<li>
						<div class="da-slide">
							<div class="welcome-to">
								<h2>Revolution</h2>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly.</p>
									<a href="details.html" class="da-link">shop now</a>
							</div>	
							<div class="da-img"><img src="images/slider3.png" alt="image01" /></div>
							<div class="clear"></div>
						</div>
					</li>
					<li>
						<div class="da-slide">
							<div class="welcome-to welcome-to1">
								<h2>Quality Control</h2>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name.</p>
									<a href="details.html" class="da-link">shop now</a>
							</div>	
							<div class="da-img da-img1"><img src="images/slider4.png" alt="image01" /></div>
							<div class="clear"></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!----->
	<div class="wrap">
		<!----start-img-cursual---->
		<div id="owl-demo" class="owl-carousel">
			<div class="item" onclick="location.href='details.html';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="details.html">branded shoes</a></h4>
					<a href="details.html" class="btn">shop</a>
				</div>
			</div>	
			<div class="item" onclick="location.href='details.html';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="details.html">branded tees</a></h4>
					<a href="details.html" class="btn">shop</a>
				</div>
			</div>	
			<div class="item" onclick="location.href='details.html';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="details.html">branded jeens</a></h4>
					<a href="details.html" class="btn">shop</a>
				</div>
			</div>	
			<div class="item" onclick="location.href='details.html';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="details.html">branded tees</a></h4>
					<a href="details.html" class="btn">shop</a>
				</div>
			</div>	
			<div class="item" onclick="location.href='details.html';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="details.html">branded shoes</a></h4>
					<a href="details.html" class="btn">shop</a>
				</div>
			</div>	
			<div class="item" onclick="location.href='details.html';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="details.html">branded tees</a></h4>
					<a href="details.html" class="btn">shop</a>
				</div>
			</div>	
			<div class="item" onclick="location.href='details.html';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
				</div>
				<div class="cau_left">
					<h4><a href="details.html">branded jeens</a></h4>
					<a href="details.html" class="btn">shop</a>
				</div>
			</div>	
		</div>
		<!----//End-img-cursual---->
	</div>
	<!-- start main1 -->
	<div class="main_bg1">
		<div class="wrap">	
			<div class="main1">
				<h2>featured products</h2>
			</div>
		</div>
	</div>
	<!-- start main -->
	<div class="main_bg">
		<div class="wrap">	
			<div class="main">
				<!-- start grids_of_3 -->
				<div class="grids_of_3">
					<div class="grid1_of_3">
						<a href="details.html">
							<img src="images/pic1.jpg" alt=""/>
							<h3>branded shoes</h3>
							<div class="price">
								<h4>$300<span>indulge</span></h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
					<div class="grid1_of_3">
						<a href="details.html">
							<img src="images/pic2.jpg" alt=""/>
							<h3>branded t-shirts</h3>
							<div class="price">
								<h4>$300<span>indulge</span></h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
					<div class="grid1_of_3">
						<a href="details.html">
							<img src="images/pic3.jpg" alt=""/>
							<h3>branded tees</h3>
							<div class="price">
								<h4>$300<span>indulge</span></h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="grids_of_3">
					<div class="grid1_of_3">
						<a href="details.html">
							<img src="images/pic4.jpg" alt=""/>
							<h3>branded bags</h3>
							<div class="price">
								<h4>$300<span>indulge</span></h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
					<div class="grid1_of_3">
						<a href="details.html">
							<img src="images/pic5.jpg" alt=""/>
							<h3>ems women bag</h3>
							<div class="price">
								<h4>$300<span>indulge</span></h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
					<div class="grid1_of_3">
						<a href="details.html">
							<img src="images/pic6.jpg" alt=""/>
							<h3>branded cargos</h3>
							<div class="price">
								<h4>$300<span>indulge</span></h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
					<div class="clear"></div>
				</div>	
				<!-- end grids_of_3 -->
			</div>
		</div>
	</div>	
	<!-- start footer -->
	<div class="footer_bg">
		<div class="wrap">	
			<div class="footer">
				<!-- start grids_of_4 -->	
				<div class="grids_of_4">
					<div class="grid1_of_4">
						<h4>featured sale</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="grid1_of_4">
						<h4>mens store</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="grid1_of_4">
						<h4>women store</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="grid1_of_4">
						<h4>quick links</h4>
						<ul class="f_nav">
							<li><a href="#">alexis Hudson</a></li>
							<li><a href="#">american apparel</a></li>
							<li><a href="#">ben sherman</a></li>
							<li><a href="#">big buddha</a></li>
							<li><a href="#">channel</a></li>
							<li><a href="#">christian audigier</a></li>
							<li><a href="#">coach</a></li>
							<li><a href="#">cole haan</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>	
		
<!-- start footer -->
<?php include('footer.php'); ?>
