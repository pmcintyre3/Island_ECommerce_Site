<?php

	if(empty($_SESSION['user'])) { 
        $login_info = "<a href='login.php' id='login'>Login</a> <a href='#' id='register'>Register</a>";
    }
	else{
		$login_info = "<a href='logout.php' id='login'>Logout</a>";
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $pageTitle ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/jquery.min.js"></script>

		<!-- start slider -->		
	
		<!-- Owl Carousel Assets -->
		<link href="css/owl.carousel.css" rel="stylesheet">

		<!-- Owl Carousel Assets -->
		<!-- Prettify -->
		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {
		
			  $("#owl-demo").owlCarousel({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				navigation : true,
				navigationText : ["",""],
				rewindNav : false,
				scrollPerPage : false,
				pagination : false,
				paginationNumbers: false,
			  });
		
			});
		</script>
		
		<!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		
	</head>

	<body>
		<!-- start header -->
		<div class="header_bg">
			<div class="wrap">
				<div class="header">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/> </a>
					</div>
					
					<div class="h_icon">
						<ul class="icon1 sub-icon1">
								
							<li>
								
								<a class="active-icon c1" href="#"><i><?php echo $item_count ?></i></a>
								<ul class="sub-icon1 list">
									<li><h3>shopping cart empty</h3><a href="#"></a></li>
									<li><p>if items in your wishlist are missing, <a href="contact.html">contact us</a> to view them</p></li>
								</ul>
							</li>
						</ul>
						
					</div>
					<div id="login_div">
						<!--<a href="#" id="login"><?php //echo $login_info ?></a>-->
						<?php echo $login_info ?>
					</div>
					<div class="h_search">
						<form>
							<input type="text" value="">
							<input type="submit" value="">
						</form>
						
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="header_btm">
			<div class="wrap">
				<div class="header_sub">
					<div class="h_menu">
						<ul>
							<li class="active"><a href="index.php">Home</a></li> |
							<li><a href="sale.html">sale</a></li> |
							<li><a href="handbags.html">handbags</a></li> |
							<li><a href="accessories.html">accessories</a></li> |
							<li><a href="wallets.html">wallets</a></li> |
							<li><a href="sale.html">sale</a></li> |
							<li><a href="index.php">mens store</a></li> |
							<li><a href="shoes.html">shoes</a></li> |
							<li><a href="sale.html">vintage</a></li> |
							<li><a href="service.html">services</a></li> |
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
					<div class="top-nav">
						  <nav class="nav">	        	
							<a href="#" id="w3-menu-trigger"> </a>
								  <ul class="nav-list" style="">
										<li class="nav-item"><a class="active" href="index.php">Home</a></li>
										<li class="nav-item"><a href="sale.html">Sale</a></li>
										<li class="nav-item"><a href="handbags.html">Handbags</a></li>
										<li class="nav-item"><a href="accessories.html">Accessories</a></li>
										<li class="nav-item"><a href="shoes.html">Shoes</a></li>
										<li class="nav-item"><a href="service.html">Services</a></li>
										<li class="nav-item"><a href="contact.html">Contact</a></li>
								 </ul>
						   </nav>
							 <div class="search_box">
							<form>
							   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
							</form>
						</div>
						  <div class="clear"> </div>
						  <script src="js/responsive.menu.js"></script>
					 </div>		  
					<div class="clear"></div>
				</div>
			</div>
		</div>