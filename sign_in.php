<?php include "session_check.php";
$_SESSION['currentPage'] = "sign_in.php";?>

<html>
	<head>
		<title>Sign-In</title>
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
            <h1>Sign In</h1>
			<form method="post" action="sign_in_handler.php">
				<br><a href="sign_up.php"><h3>Create Account</h3></a></br>
				<div class="signinform">
					<label for="email">Email</label>
					<input value="<?php echo isset($_SESSION['signinForm']['email']) ? $_SESSION['signinForm']['email'] : ''; ?>"type="text" id="email" name="email">
				</div>
				<div class="signinform">
					<label for="password">Password</label>
					<input value="<?php echo isset($_SESSION['signinForm']['password']) ? $_SESSION['signinForm']['password'] : ''; ?>" type="password" id="password" name="password">
				</div>
				<?php 
					if (isset($_SESSION['signinError'])) {
						echo "<div class='message'>".$_SESSION['signinError']."</div>";
					}
					unset($_SESSION['signinError']);
				?>
				<button type="submit" id="signinbutton" value="Submit">LOGIN</button>
			</form>
		</div>
	</body>
	<?php include "footer.php" ?> 
</html>