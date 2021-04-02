<?php
require_once dirname(__FILE__)."/dao/BaseDao.class.php";

class BaseDao {
private $connection;

public function __construct(){

  $servername = "localhost";
  $username = "root";
  $password = "root";

  try {
    $this->connection = new PDO("mysql:host=$servername;dbname=onlineshop", $username, $password);
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    throw $e;
  }
}

public function query($query, $params)
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
    $stmt->execute(['id' => $id]);
    $user = $stmt->fetch();

}
 ?>
