<?php
include "../../config/conn.php";
interface IUserService
{
  public function register($user);
  public function login($username, $password);
}

class UserService implements IUserService
{
  private $conn;
  public function __construct() {
    global $conn;
    $this->conn = $conn;
  }
  public function register($user){
    $sql = "INSERT INTO users(name, gender, username, password ) VALUES (
      '" . $user->getName() . "', 
     '" . $user->getGender() . "', 
     '" . $user->getUsername() . "', 
     '" . $user->getPassword() . "'
     )";
     $status = $this->conn->query($sql);
     if($status){
        return true;
     }else{
      return false;
     }
  }
  public function register1($user)
  {
    // $conn = new Database();
    // $conn->sql = "INSERT INTO users(name, gender, username, password ) VALUES (
    //    '" . $user->getName() . "', 
    //   '" . $user->getGender() . "', 
    //   '" . $user->getUsername() . "', 
    //   '" . $user->getPassword() . "'
    //   )";

    // $status = $conn->getConn()->query($conn->sql);
    // if ($status === true) {
    //   echo "<script>
    //       console.log('user created successfully');
    //   </script>";

    //   session_start();

    //   $_SESSION['userId'] = $user->getId();
    //   $_SESSION['username'] = $user->getUsername();

    //   header("Location: ../index.php");

    // } else {
    //   echo "<script>
    //       console.log('user creating unsuccessful');
    //   </script>";
    // }

    
  }
  public function login($username, $password)
  {
    session_start();



    header("Location: ../index.php");
  }
}
