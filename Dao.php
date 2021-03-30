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