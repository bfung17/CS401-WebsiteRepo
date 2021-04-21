<?php include "session_check.php";
$_SESSION['currentPage'] = "cinnamonroll_page.php";?>

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
		<link rel="stylesheet" href="displayItems.css">
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
        <h1>Selection of Cinnamon Rolls...</h1>
		<div class="rows">
			<div class="section">
				<h2>Cinnamon Rolls</h2>
				<a href="cinnamonroll_item.php"><img src="cinnamon_rolls.jpg"></a>
			</div>
			<div class="section">
				<h2>Many more cinnamon rolls</h2>
				<p>This is the basic setup. I will add more functionality
					later such as a filtering system and you will eventually be
					able to click on them and take you to their respective page for
					more info for each desert. Also, more items will be added once
					my friend takes more pictures of his work
				</p>
			</div>
			<div class="section">
			</div>
		</div>
	</body>
    <?php include "footer.php" ?>
    <script src="/js/searchbar.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</html>