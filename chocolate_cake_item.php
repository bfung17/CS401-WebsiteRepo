<?php include "session_check.php"?>

<html>
	<head>
		<title>Cady's Cakes and Pastries</title>
		<link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/jpg" href="cake.jpg"/>
	</head>
	<body>
		<link rel="stylesheet" href="displayItems.css">
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
        <h1>Chocolate Cake</h1>
		<div class="rows">
			<div class="column">
				<img src="chocolate_cake.jpg">
			</div>
			<div class="column">
				<h2>Description</h2>
				<p>Moist chocolate sponge cake with swiss meringue 
                    chocolate buttercream, garnished in chocolate chips for all lovers of chocolate.
                </p>
			</div>
			</div>
		</div>
	</body>
    <?php include "footer.php" ?> 
</html>