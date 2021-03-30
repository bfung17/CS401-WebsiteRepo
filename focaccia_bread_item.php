<?php 
    include "session_check.php";
    $_SESSION['currentPage'] = "focaccia_bread_item.php";
?>


<html>
	<head>
		<title>Cady's Cakes and Pastries</title>
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="review.css">
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
        <h1>Focaccia Bread</h1>
		<div class="rows">
			<div class="column">
				<img src="focaccia_bread.jpg">
			</div>
			<div class="column">
                <h2>Price</h2>
                <p class=price>
                    $15
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
                    $reviews = $dao->getReviews("10");
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
</html>