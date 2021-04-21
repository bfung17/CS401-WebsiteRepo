<?php 
    include "session_check.php";
    $_SESSION['currentPage'] = "cookies_item.php";
?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Cady's Cakes and Pastries</title>
        <meta charset="utf-8">
        <script src="/js/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="review.css">
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
        <h1>Chocolate Chip Cookies</h1>
		<div class="rows">
			<div class="column">
				<img src="cookies.jpg">
			</div>
			<div class="column">
                <h2>Price</h2>
                <p class=price>
                    $9,000
                </p>
                <h2>Description</h2>
				<p>*Some description my friend will give me later*
                </p>
                <button>Add to Cart</button>
                <div class="review">
                <h1>Reviews</h1>
                <form method="post" action="review_handler.php">
                    <div class="reviewform">
                        <?php 
                            if ($_SESSION['canReview']){
                                echo "<label for='user'>User:". $_SESSION['user'] ."</label>";
                            } else {
                                echo "<label for='user'>Sign in to Leave a Review!</label>";
                            }
                        ?>
                        <input class="submit" type="submit" value ="Submit">
                        <br><textarea id="review" name="review" rows="5" cols="100" placeholder="Leave review..."></textarea></br>
                    </div>
                </form>
                <?php 
                    require_once 'Dao.php';
                    $dao = new Dao();
                    $reviews = $dao->getReviews("11");
                ?>
                <table id="reviews">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Review</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach ($reviews as $review) {
                            echo
                                "<tr><td>" . htmlspecialchars($review['user']) . "</td>".
                                "<td>" . htmlspecialchars($review['review']) . "</td>" .
                                "<td>{$review['date_entered']}</td></tr>";
                        }
                    ?>
                    </tbody>
                </table>
			</div>
		</div>
        </div>
	</body>
    <?php include "footer.php" ?>
    <script src="/js/searchbar.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</html>