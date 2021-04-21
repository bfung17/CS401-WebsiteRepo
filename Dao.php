<?php

require_once 'KLogger.php';

class Dao {
    private $host = "us-cdbr-east-03.cleardb.com" ;
    private $db = "heroku_32ded4d6f46196f" ;
    private $user = "bfc323ce7d7b9e";
    private $pass = "ddace9f9";
    private $dsn = 'mysql:dbname=heroku_32ded4d6f46196f;host=us-cdbr-east-03.cleardb.com';
    protected $logger;

    public function __construct()
    {
        $this->logger = new KLogger ("log.txt", KLogger::DEBUG);
    }

    public function getConnection(){
        try {
            $connection = new PDO($this->dsn, $this->user, $this->pass);
            $this->logger->LogDebug("Got a connection");
        } catch (PDOException $e) {
            $error = 'Connection failed: ' . $e->getMessage();
            $this->logger->LogError($error);
        }
        return $connection;
    }

    public function insertReview($id, $user, $review){
        $connection = $this->getConnection();
        $q = $connection->prepare("insert into reviews (id, user, review) values (:id, :user, :review)");
        $q->bindParam(":id", $id);
        $q->bindParam(":user", $user);
        $q->bindParam(":review", $review);
        $q->execute();
    }

    public function getReviews($id) {
        $connection = $this->getConnection();
        try {
            switch($id)
            {
                case 1:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=1 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;
                case 2:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=2 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;
                case 3:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=3 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;
                case 4:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=4 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;
                case 5:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=5 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;
                case 6:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=6 order by date_entered desc", PDO::FETCH_ASSOC);
                    break; 
                case 7:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=7 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;
                case 8:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=8 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;
                case 9:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=9 order by date_entered desc", PDO::FETCH_ASSOC);
                    break; 
                case 10:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=10 order by date_entered desc", PDO::FETCH_ASSOC);
                    break; 
                case 11:
                    $rows = $connection->query("select user, review, date_entered from reviews where id=11 order by date_entered desc", PDO::FETCH_ASSOC);
                    break;                
            }
              
        } catch (Exception $e) {
            echo print_r($e,1);
            exit;
        }
        return $rows;
    }

    public function addProfile($email, $password) {
        $connection = $this->getConnection();
        $q = $connection->prepare("insert into user_login (Email, Password) values (:email, :password)");
        $q->bindParam(":email", $email);
        //$passHash = password_hash($password,PASSWORD_DEFAULT);
        $passHash = hash('sha256',$password);
        $q->bindParam(":password", $passHash);
        $q->execute();
    }

    public function userExist($email, $password){
        $connection = $this->getConnection();
        try {
            $q = $connection->prepare("select count(*) as total from user_login where Email = :email and 
            Password = :password");
            $q->bindParam(":email", $email);
            //$passHash = password_hash($password,PASSWORD_DEFAULT);
            $passHash = hash('sha256',$password);
            //$q->bindParam(":password", $password);
            $q->bindParam(":password", $passHash);
            $q->execute();
            $row = $q->fetch();
            if ($row['total'] == 1){
                $this->logger->LogInfo("user found", print_r($row,1));
                echo("user found");
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo print_r($e,1);
            exit;
        }
    }

    public function checkEmail($email) {
        $connection = $this->getConnection();
        try {
            $q = $connection->prepare("select count(*) as total from user_login where Email = :email");
            $q->bindParam(":email", $email);
            $q->execute();
            $row = $q->fetch();
            if ($row['total'] == 1){
                $this->logger->LogInfo("user found", print_r($row,1));
                echo("user found");
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo print_r($e,1);
            exit;
        }
    }

    public function checkPass($email) {
        $connection = $this->getConnection();
        try {
            $q = $connection->prepare("select Password from user_login where Email = :email");
            $q->bindParam(":email", $email);
            $q->execute();
            $row = $q->fetch();
        } catch (Exception $e) {
            echo print_r($e,1);
            exit;
        }
        return $row;
    }

    public function fetchCakes() {
        if (isset($_POST["action"])) {
            $query = "
          SELECT * FROM cakes WHERE stock_avail = '1'
         ";
            if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
                $query .= "
           AND Price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
          ";
            }    
        }
            $connection = $this->getConnection();
            $statement = $connection->prepare($query);
            $statement->execute();
            $result    = $statement->fetchAll();
            $total_row = $statement->rowCount();
            $output    = '';
            if ($total_row > 0) {
                foreach ($result as $row) {
                    $output .= '
                <div class="col-md-4 col-sm-6">
                <div class="product-grid">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="' . $row['Product_Image'] . '">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">' . $row['Product_Name'] . '</a></h3>
                        <div class="price">
                            $' . $row['Price'] . '
                            <span>$' . $row['Price'] . '</span>
                        </div>
                        <a class="add-to-cart" href="">ADD TO CART</a>
                    </div>
                </div>
                </div>';
                }
            } else {
                $output = '<h3>No Data Found</h3>';
            }
            echo $output;
    }
}