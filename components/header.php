<header class="header">
	<div class="flex">
		<a href="home.php" class="logo"><img src="img/logo.jpg"></a>
		<nav class="navbar">
			<a href="home.php">home</a>
			<a href="view_products.php">products</a>
			<a href="order.php">orders</a>
			<a href="about.php">about us</a>
			<a href="contact.php">contact us</a>
			<a href="register.php">sign up</a>
			<a href="login.php">login</a>
			<a href="logout.php">logout</a>

		</nav>
		<div class="icons">
			<?php
				$count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
				$count_wishlist_items->execute([$user_id]);
				$total_wishlist_items = $count_wishlist_items->rowCount();
			?>
			
			<a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup><?=$total_wishlist_items ?></sub></a>

			<?php
				$count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
				$count_cart_items->execute([$user_id]);
				$total_cart_items = $count_cart_items->rowCount();
			?>
			<a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup><?=$total_cart_items ?></sub></a>
				
			<i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
		</div>
		<div class="user-box">
			
			<p>username : <spn><?php echo $_SESSION['user_name']; ?></span></p>
			<p>Email : <span><?php echo $_SESSION['user_eail']; ?></span></p>
			<a href="login.php" class="btn">login</a>
			<a href="register.php" class="btn">register</a>
			<a href="login.php" class="btn">logout</a>
			<form method="post">
				<buttn type="submit" name="logout" class="logout_btn">log out</button>
			</form>
		</div>
	</div>
</header>