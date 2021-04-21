<?php include "session_check.php";
	if(isset($_SESSION['prevPage']) && isset($_SESSION['currentPage'])) {
		$_SESSION['prevPage'] =  $_SESSION['currentPage'];
	} else {
		$_SESSION['prevPage'] =  "homepage.php";
	}
$_SESSION['currentPage'] = "homepage.php";?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Cady's Cakes and Pastries</title>
		<meta charset="utf-8">
		<script src="/js/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/jpg" href="ariccady_logo.jpg"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
		<script src="https://unpkg.com/@popperjs/core@2"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		<script src="/js/search-it/search-it.min.js"></script>
	</head>
	<body>
		<?php 
            if (isset($_SESSION['authenticated']) && ($_SESSION['authenticated'])){
                include "header2.php";
            } else {
                include "header.php";
            }
        ?>
		<!-- Comment out for now, might want this later
		<div class="navigation">
			<nav class="navbar navbar-expand-lg bg-light navbar-light">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="cake_page.php">Cakes</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="chocolate_page.php">Chocolates</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="pie_page.php">Pies</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="cinnamonroll_page.php">Cinnamon Rolls</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="bread_page.php">Bread</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="cookies_page.php">Cookies</a>
					</li>
				</ul>
			</nav>
		</div> -->
		<h4>Welcome to Cady's Cakes and Pastries!</h4>
		<img src="ariccady_logo.jpg" alt="assorted_pastries" class="center">
		<div class="row">
			<div class="column">
				<h2>Cakes</h2>
				<a href="cake_page.php"><img src="wedding_reception_cake.jpg" alt="wedding_reception_cake"></a>
				<h2>Pies</h2>
				<a href="pie_page.php"><img src="blueberry_pie.jpg" alt="blueberry_pie"></a>
				<h2>Bread</h2>
				<a href="bread_page.php"><img src="braided_brioche_bread2.jpg" alt="braided_brioche_bread2"></a>
			</div>
			<div class="column">
				<h2>Chocolates</h2>
				<a href="chocolate_page.php"><img src="chocolates.jpg" alt="chocolates"></a>
				<h2>Cinnamon Rolls</h2>
				<a href="cinnamonroll_page.php"><img src="cinnamon_rolls.jpg" alt="cinnamon_rolls"></a>
				<h2>Cookies</h2>
				<a href="cookies_page.php"><img src="cookies.jpg" alt="cookies"></a>
			</div>
		</div>
		<footer>
			<ul>&copy;2021 Brandon Fung</ul>
			<ul><a href="https://github.com/bfung17">Github</a></ul>
			<ul><a href="https://www.linkedin.com/in/brandon-fung-30a34b155/">LinkedIn</a></ul>
		</footer>
		<script src="/js/searchbar.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
