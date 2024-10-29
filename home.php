<?php
include 'components/connection.php';
session_start();
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else{
    $user_id = '';
}
   if (isset($_POST['logout'])){
   	session_destroy();
   	header("location: login.php");
   }
?>
<style type="text/css">
<?php include 'style.css'; ?>	
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devicewidth, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Green Coffee -home page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
	
	<section class="home-section">
		<div class="slider">
			<div class="slider_slider slide1">
				<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Well Come To My Shop</h1>
						<p>Where Every Cup is a Step Toward Wellness</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			
			<!--slide end-->
			<div class="slider_slider slide2">
				<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Discover a World of Flavor and Freshness at Our Green Tea Shop</h1>
						<p>Where Every Cup is a Step Toward Wellness</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			
			<!--slide end-->
			<div class="slider_slider slide3">
				<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Welcome to a Space of Calm and Clarity</h1>
						<p>Savor the Benefits of Green Tea</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			
			<!--slide end-->
			<div class="slider_slider slide4">
				<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Bringing You the Finest Green Teas</h1>
						<p>Crafted with Care, Served with Love</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			
			<!--slide end-->
			<div class="sliderslider slide5">
				<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Naturally Crafted for Health, Energy, and Tranquility</h1>
						<p>Savor the Green Goodness: A Journey to Wellness Begins Here</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				<div class="hero-dec-top"></div>
				<div class="hero-dec-bottom"></div>
			</div>
			
			<!--slide end-->
			<div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
			<div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
		</div>
	</section>

	<!--home slide end-->
		<section class="thumb">
			<div class="box-container">
				<div class="box">
					<img src="img/thumb2.jpg">
					<h3>Green tea</h3>
					<p>A refreshing, antioxidant-rich tea made from unoxidized tea leaves, offering a smooth and earthy flavor that's both calming and energizing</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb1.jpg">
					<h3>Green coffee</h3>
					<p>A zesty blend of tea and natural lemon essence, known for its immune-boosting properties and vibrant, refreshing taste</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb0.jpg">
					<h3>Lemon tea</h3>
					<p>Unroasted coffee beans that retain natural antioxidants, offering a mild, earthy flavor with potential health benefits, including improved metabolism</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb.jpg">
					<h3>Green tea</h3>
					<p>A soothing infusion of green tea leaves and herbs, bringing together calming aromas and natural wellness in every sip</p>
					<i class="bx bx-chevron-right"></i>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="box-container">
				<div class="box"><img src="img/healthy-tea.png"></div>
				<div class="box"><img src="img/download.png">
					<span>healthy tea</span>
					<h1>save up to 50% off</h1>
					<p>A nourishing blend crafted to support wellness, featuring natural ingredients like herbs, spices, and teas rich in antioxidants and nutrients to rejuvenate the body and mind</p>
				</div>
			</div>
		</section>
		<section class="shop">
			<div class="title">
				<img src="img/download.png">
				<h1>Most Like Products</h1>
				<h2>a cup of green tea makes your healthy</h2>
			</div>
			<div class="row">
				<div class="row-detail">
					
				</div>
				<div class="box-container">
					<div class="box">
						<img src="img/card.jpg">
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
					<div class="box">
						<img src="img/card0.jpg">
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
					<div class="box">
						<img src="img/card1.jpg">
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
					<div class="box">
						<img src="img/card2.jpg">
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
					<div class="box">
						<img src="img/10.jpg">
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
					<div class="box">
						<img src="img/6.webp">
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="shop-category">
			<div class="box-container">
				<div class="box">
					<img src="img/6.jpg">
					<div class="detail">
						<span>BIG OFFERS</span>
						<h1>Extra 15% Off</h1>
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
				</div>
				<div class="box">
					<img src="img/7.jpg">
					<div class="detail">
						<span>new in taste</span>
						<h1>coffee house</h1>
						<a href="view_products.php" class="btn">Shop Now</a>
					</div>
				</div>
			</div>	
		</section>
		<section class="services">
			<div class="box-container">
				<div class="box">
					<img src="img/icon2.png">
					<div class="detail">
						<h3>great savings</h3>
						<p>save big every order</p>
					</div>
				</div>
				
				<div class="box">
					<img src="img/icon1.png">
					<div class="detail">
						<h3>24*7 service</h3>
						<p>best service for you</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon0.png">
					<div class="detail">
						<h3>gift vouchers</h3>
						<p>vouchers for every months</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon.png">
					<div class="detail">
						<h3>island wide delivery</h3>
						<p>distribution across the entire island</p>
					</div>
				</div>
			</div>
		</section>
		<section class="brand">
			<div class="box-container">
				<div class="box">
					 <img src="img/sri-1.png" alt="sri-1" class="logo">
				</div>
				<div class="box">
					 <img src="img/sri-2.png" alt="sri-2" class="logo">
				</div>
				<div class="box">
					 <img src="img/sri-7.png" alt="sri-7" class="logo">
				</div>
				<div class="box">
					 <img src="img/sri-6.png" alt="sri-6" class="logo">
				</div>
				<div class="box">
					 <img src="img/sri-3.png" alt="sri-3" class="logo">
				</div>
			</div>
		</section>
		
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php' ?>
</body>
</html> 