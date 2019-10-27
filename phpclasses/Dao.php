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

    public function createUser($username, $password, $region) {
      $conn = $this->getConnection();
      $date = date('Y-m-d H:i:s');

      $createQuery = "insert into user (username,password,created_on,region) values (:username, :password, :created_on, :region)";

      $q = $conn->prepare($createQuery);
      $q->bindParam(":username", $username);
      $q->bindParam(":password", $password);
      $q->bindParam(":created_on", $date);
      $q->bindParam(":region", $region);
      $q->execute();
    }
  }
//
//mysql://bbd8a613c88c75:d25717f8@us-cdbr-iron-east-05.cleardb.net/heroku_92a29c852238ab6?reconnect=true
?>

