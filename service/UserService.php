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
  public function __construct()
  {
    global $conn;
    $this->conn = $conn;
  }
  public function register($user)
  {
    $sql = "INSERT INTO users(name, gender, username, password ) VALUES (
      '" . $user->getName() . "', 
     '" . $user->getGender() . "', 
     '" . $user->getUsername() . "', 
     '" . $user->getPassword() . "'
     )";
    $status = $this->conn->query($sql);
    // fail
    if (!$status) {
      echo "<script>
            console.log('Error user creating');
        </script>";
    }

    // successs
    session_start();
    $_SESSION['username'] = $user->getUsername();
    header("Location: ../index.php");
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

    $sql = "SELECT * FROM users WHERE username= '$username' AND password = '$password' ";
    $result = $this->conn->query($sql);

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      echo $result->num_rows;
      $user = new User($row['id'], $row['name'], $row['gender'], $row['username'], $row['password']);
      // echo "result: " . $user->toString();
      $_SESSION['username'] = $user->getUsername();
      header("Location: ../index.php");

    }
  }
}
