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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Green Coffee -home page</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>about us</h1>
		</div>
		<div class="title2">
			<a href="home.php">home</a><span>/about</span>
		</div>
		<div class="about-category">
			<div class="box">
				<img src="img/3.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon green</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/about.png">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon Teaname</h1>
					<a href="vgreeniew_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/1.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon green</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/about.png">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon Teaname</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<section class="services">
			<div class="title">
				<img src="img/download.png" class="logo">
				<h1>why choose us</h1>
				<p>We source only the finest, naturally grown tea leaves and ingredients to ensure every cup is packed with purity and flavor</p>
			</div>
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
		<div class="about">
			<div class="row">
				<div class="img-box">
					<img src="img/3.png">
				</div>
				<div class="detail">
					<h1>Visit our beautful showroom!</h1>
					<p>At Green Tea Cafe Shop, we offer a serene space where you can unwind with the finest selection of green teas, handcrafted beverages, and delicious treats. Our cozy cafe is designed to provide you with a peaceful retreat, perfect for tea lovers and those looking to relax or catch up with friends. Every cup we serve is made with love, care, and a passion for quality.
					Come in, sip, and enjoy the calming experience at Green Tea Cafe Shop – where every moment is a blend of tranquility and taste.</p>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<div class="testimonal-container">
			<div class="title">
				<img src="img/download.png" class="logo">
				<h1>what people say about us</h1>
				<p>At *Green Tea Cafe Shop*, we are passionate about bringing the best green tea experience to our community. Our mission is to offer a welcoming space where tea lovers can enjoy carefully curated, high-quality teas, freshly brewed to perfection. Whether you're here for a quick cup or a long, relaxing visit, we aim to make every moment special.</p>
			</div>	
				<div class="container">
					<div class="testimonal-item">
						<img src="img/02.jpg">
						<h1>Mr.Imanjala</h1>
						<p>"A hidden gem! The green tea here is absolutely amazing, and the atmosphere is so calming. It's my new favorite spot."</p>
					</div>
					<div class="testimonal-item">
						<img src="img/01.jpg">
						<h1>Mrs.Subodhi</h1>
						<p> "The perfect place to relax with a cup of tea. The staff is friendly, and the quality is unbeatable."</p>
					</div>
					<div class="testimonal-item">
						<img src="img/03.jpg">
						<h1>Mrs.Dewmini</h1>
						<p>"Every visit to Green Tea Cafe Shop feels like a mini retreat. Highly recommended!"</p>
					</div>
		</div>
	<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html> 