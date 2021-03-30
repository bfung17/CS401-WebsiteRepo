<?php include "session_check.php";
$_SESSION['currentPage'] = "sign_up.php";?>

<html>
	<head>
		<title>Sign-In</title>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" type="image/jpg" href="cake.jpg"/>
	</head>
	<body>
		<?php include "header.php" ?>
        <div class="header">
            <h1>Sign Up</h1>
			<form method="post" action="sign_up_handler.php">
			<div class="signinform">
					<label for="email">Email</label>
					<input value="<?php echo isset($_SESSION['form']['email']) ? $_SESSION['form']['email'] : ''; ?>" type="text" id="email" name="email" placeholder="Enter your email address...">
					<?php 
						if (isset($_SESSION['emailError'])) {
							echo "<div class='message'>".$_SESSION['emailError']."</div>";
						}
						unset($_SESSION['emailError']);
					?>
			</div>
			<div class="signinform">
					<label for="password">Password</label>
					<input value="<?php echo isset($_SESSION['form']['password']) ? $_SESSION['form']['password'] : ''; ?>" type="password" id="password" name="password" placeholder="Enter a password...">
					<?php 
						if (isset($_SESSION['passError'])) {
							echo "<div class='message'>".$_SESSION['passError']."</div>";
						}
						unset($_SESSION['passError']);
					?>
			</div>
			<div class="signinform">
					<label for="password">Retype Password</label>
					<input value="<?php echo isset($_SESSION['form']['passwordMatch']) ? $_SESSION['form']['passwordMatch'] : ''; ?>" type="password" id="passwordMatch" name="passwordMatch" placeholder="Re-Enter your password...">
					<?php 
						if (isset($_SESSION['passMatchError'])) {
							echo "<div class='message'>".$_SESSION['passMatchError']."</div>";
						}
						unset($_SESSION['passMatchError']);
					?>
			</div>
			<br>
				<div class="signinform">
					<button id="signinbutton" type="submit">CREATE ACCOUNT</button>
				</div>
			</br>
		</div>
	</body>
    <?php include "footer.php" ?> 
</html>