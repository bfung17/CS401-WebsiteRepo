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
        //$q->bindParam(":password", $passHash);
        $q->bindParam(":password", $password);
        $q->execute();
    }

    public function userExist($email, $password){
        $connection = $this->getConnection();
        try {
            $q = $connection->prepare("select count(*) as total from user_login where Email = :email and 
            Password = :password");
            $q->bindParam(":email", $email);
            //$passHash = password_hash($password,PASSWORD_DEFAULT);
            $q->bindParam(":password", $password);
            //$q->bindParam(":password", $passHash);
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
}