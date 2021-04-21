<?php include "session_check.php";
	if(isset($_SESSION['prevPage']) && isset($_SESSION['currentPage'])) {
		$_SESSION['prevPage'] =  $_SESSION['currentPage'];
	} else {
		$_SESSION['prevPage'] =  "cake_page.php";
	}
	$_SESSION['currentPage'] = "cake_page.php";
?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Cady's Cakes and Pastries</title>
		<meta charset="utf-8">
		<script src="/js/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/js/jquery-ui-1.12.1.custom/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="itemPage.css">
        <link rel="shortcut icon" type="image/jpg" href="ariccady_logo.jpg"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
		<script src="https://unpkg.com/@popperjs/core@2"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
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
		<section>
			<h1>Selection of Cakes...</h1>
			<ul>
				<li class="list active" data-filter="all">All</li>
				<li class="list" data-filter="chocolate">Chocolate</li>
				<li class="list" data-filter="wedding">Wedding</li>
			</ul>
			<div class="product">
				<div class="itemBox chocolate">
					<h2>Chocolate Cake</h2>
					<a href="chocolate_cake_item.php"><img src="chocolate_cake.jpg"></a>
				</div>
				<div class="itemBox chocolate">
					<h2>German Chocolate Cake</h2>
					<a href="german_chocolate_cake_item.php"><img src="german_chocolate_cake.jpg"></a>
				</div>
				<div class="itemBox wedding">
					<h2>Wedding Cake</h2>
					<a href="wedding_cake_item.php"><img src="wedding_cake.jpg"></a>
				</div>
				<div class="itemBox wedding">
					<h2>Bridal Cake</h2>
					<a href="bridal_cake_item.php"><img src="bridal_cake.jpg"></a>
				</div>
			</div>
		</section>
	</body>
    <?php include "footer.php" ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
	<script src="/js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script type="text/javascript" src="/js/cake_page.js"></script>
</html>