<?php include "session_check.php";
	if(isset($_SESSION['prevPage']) && isset($_SESSION['currentPage'])) {
		$_SESSION['prevPage'] =  $_SESSION['currentPage'];
	} else {
		$_SESSION['prevPage'] =  "sign_up.php";
	}
$_SESSION['currentPage'] = "sign_up.php";?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Sign-In</title>
		<meta charset="utf-8">
		<script src="/js/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/jpg" href="ariccady_logo.jpg"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
		<script src="https://unpkg.com/@popperjs/core@2"></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		<script src="/js/search-it/search-it.min.js"></script>
		<script src="/js/dist/jquery.validate.min.js"></script>
		<script src="/js/sign_up_validation.js"></script>
	</head>
	<body>
		<?php include "header.php" ?>
        <div class="header">
            <h1>Sign Up</h1>
			<form method="post" action="sign_up_handler.php" name="registration">
				<div class="signinform">
					<label for="email">Email</label>
					<input value="<?php echo isset($_SESSION['form']['email']) ? $_SESSION['form']['email'] : ''; ?>" type="email" id="email" name="email" placeholder="Enter your email address...">
				</div>
				<div class="signinform">
					<label for="password">Password</label>
					<input value="<?php echo isset($_SESSION['form']['password']) ? $_SESSION['form']['password'] : ''; ?>" type="password" id="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
				</div>
				<div class="signinform">
					<label for="password">Re-Enter Password</label>
					<input value="<?php echo isset($_SESSION['form']['passwordMatch']) ? $_SESSION['form']['passwordMatch'] : ''; ?>" type="password" id="passwordMatch" name="passwordMatch" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
				</div>
				<div class="signinform">
					<button id="signinbutton" type="submit">Register</button>
				</div>
		</div>
	</body>
    <?php include "footer.php" ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</html>