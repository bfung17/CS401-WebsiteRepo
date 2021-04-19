<?php include "session_check.php";
$_SESSION['currentPage'] = "orders.php";?>

<html>
	<head>
		<title>Orders</title>
		<script src="/js/jquery-3.6.0.min.js"></script>
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
            <h1>Track Shipping Orders by #</h1>
			<br>
			<div class="signinform">
				<div><label>Order #</label></div>
				<div><input type="number" name="order_number" placeholder="Order #"></div>
				<br>
					<div><label>Recipient Zip Code</label></div>
					<div><input type="number" name="zip_code" placeholder="Zip Code"></div>
				</br>
				<br>
					<div class="signincontainer">
						<button id="signinbutton" type="submit">Track Order</button>
					</div>
				</br>
			</div>
			</br>
		</div>
	</body>
	<?php include "footer.php" ?> 
</html>