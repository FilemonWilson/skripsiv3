<?php
require_once('connection.php');
class master {
  private $pdo;
  private $conn;
  public function __construct(){
    $this->pdo=new connection();
    $this->conn=$this->pdo->getConnect();
    session_start();
  }
  public function continous($clicks,$time){
    $username=$_SESSION['srv1']['username'];
    $sql=$this->conn->prepare("select numberofclicks,pageduration from srv1 where username = :username");
    $sql->bindParam(":username",$username);
    $sql->execute();
    $user=$sql->fetch();
    $clicks=$clicks+$user['numberofclicks'];
    $time=$time+$user['pageduration'];
    $sql=$this->conn->prepare("update srv1 set numberofclicks = :numberofclicks ,pageduration = :pageduration where username = :username ");//sesuain dengan database
    $sql->bindParam(":numberofclicks",$clicks);
    $sql->bindParam(":pageduration",$time);
    $sql->bindParam(":username",$username);
    $asem=$sql->execute();
  }
  public function renewvalue($username){
    $sql=$this->conn->prepare("update srv1 set numberofclicks = 0, pageduration = 0 where username = :username");
    $sql->bindParam(":username",$username);
    $sql->execute();
  }
}
 ?>
