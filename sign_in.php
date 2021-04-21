<?php include "session_check.php";
	if(isset($_SESSION['prevPage']) && isset($_SESSION['currentPage'])) {
		$_SESSION['prevPage'] =  $_SESSION['currentPage'];
	} else {
		$_SESSION['prevPage'] =  "sign_in.php";
	}
$_SESSION['currentPage'] = "sign_in.php";?>

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
				<a href="sign_up.php"><h3>Create Account</h3></a>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</html>