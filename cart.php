<?php include "session_check.php";
$_SESSION['currentPage'] = "cart.php";?>

<html>
	<head>
		<title>Shopping Cart</title>
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
        <div class="header">
            <h1>Shopping Cart</h1>
			<p>This is a work in progress. This will be where customers can check out when they
				add items to their shopping cart. Currently don't know how to do that.
			</p>
		</div>
	</body>
	<?php include "footer.php" ?> 
</html>