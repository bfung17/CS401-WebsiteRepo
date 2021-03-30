<?php include "session_check.php"?>

<html>
	<head>
		<title>Cady's Cakes and Pastries</title>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" type="image/jpg" href="cake.jpg"/>
	</head>
	<body>
		<?php 
            if (isset($_SESSION['authenticated']) && ($_SESSION['authenticated'])){
                include "header2.php";
            } else {
                include "header.php";
            }
        ?>
		<div class="navigation">
			<nav>
				<a href="cake_page.php">Cakes</a>
				<a href="chocolate_page.php">Chocolates</a>
				<a href="pie_page.php">Pies</a>
				<a href="cinnamonroll_page.php">Cinnamon Rolls</a>
				<a href="bread_page.php">Bread</a>
				<a href="cookies_page.php">Cookies</a>
			</nav>
		</div>
		<h4>Welcome to Cady's Cakes and Pastries!</h4>
		<img src="assorted_pastries.jpg" alt="assorted_pastries" class="center">
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
	</body>
</html>
