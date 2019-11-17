<?php
  session_start();

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

      $checkQuery = "SELECT username FROM user WHERE username = :username";
      $c = $conn->prepare($checkQuery);
      $c->bindParam(':username', $username);
      $c->execute();

      if($c->rowCount() > 0){
        $_SESSION['messages'] = array("Username already exists");
        $_SESSION['status'] = 'fail';
        header("Location: https://thawing-savannah-68398.herokuapp.com/create-user.php");
        exit();
      } else {
        //Securely insert into database
        $createQuery = "insert into user (username,password,created_on,region,email) values (:username, :password, :created_on, :region, :email)";

        $password = password_hash($password, PASSWORD_BCRYPT);

        $q = $conn->prepare($createQuery);
        $q->bindParam(":username", $username);
        $q->bindParam(":password", $password);
        $q->bindParam(":created_on", $date);
        $q->bindParam(":region", $region);
        $q->bindParam(":email", $email);
        $q->execute();
      };
    }
  }
//
//mysql://bbd8a613c88c75:d25717f8@us-cdbr-iron-east-05.cleardb.net/heroku_92a29c852238ab6?reconnect=true
?>

