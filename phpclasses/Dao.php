<?php
  class Dao {

    private $host = "us-cdbr-iron-east-05.cleardb.net";
    private $db = "heroku_92a29c852238ab6";
    private $username = "bbd8a613c88c75";
    private $password = "d25717f8";

    public function getConnection() {
      $connection = '';

      try {
        $connection = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->username, $this->password);
      } catch (Exception $e) {
        echo print_r($e,1);
      }
      return $connection;
    }

    public function createUser($username, $password, $region, $email) {
      $conn = $this->getConnection();
      $date = date('Y-m-d H:i:s');

      $createQuery = "insert into user (username,password,created_on,region,email) values (:username, :password, :created_on, :region, :email)";

      $q = $conn->prepare($createQuery);
      $q->bindParam(":username", $username);
      $q->bindParam(":password", $password);
      $q->bindParam(":created_on", $date);
      $q->bindParam(":region", $region);
      $q->bindParam(":email", $email);
      $q->execute();
    }

    public function checkUsername($username) {
      $conn = $this->getConnection();

      $checkQuery = "SELECT username FROM user WHERE username = :username";
      $q = $conn->prepare($checkQuery);
      $q->bindParam(':username', $username);
      $q->execute();

      if($q->rowCount() > 0){
        $messages[] = "Sorry... username already taken";
      }else{
        exit();
      }

    }
  }
//
//mysql://bbd8a613c88c75:d25717f8@us-cdbr-iron-east-05.cleardb.net/heroku_92a29c852238ab6?reconnect=true
?>

