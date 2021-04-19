<?php include "session_check.php";
$_SESSION['currentPage'] = "bread_page.php";?>

<html>
	<head>
		<title>Cady's Cakes and Pastries</title>
		<script src="/js/jquery-3.6.0.min.js"></script>
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
        <h1>Selection of Breads...</h1>
		<div class="rows">
			<div class="section">
				<h2>Braided Bread</h2>
				<a href="braided_bread_item.php"><img src="braided_brioche_bread2.jpg"></a>
			</div>
			<div class="section">
				<h2>Focaccia Bread</h2>
				<a href="focaccia_bread_item.php"><img src="focaccia_bread.jpg"></a>
			</div>
			<div class="section">
				<h2>Many more bread</h2>
					<p>This is the basic setup. I will add more functionality
						later such as a filtering system and you will eventually be
						able to click on them and take you to their respective page for
						more info for each desert. Also, more items will be added once
						my friend takes more pictures of his work
					</p>
			</div>
		</div>
	</body>
    <?php include "footer.php" ?> 
</html>