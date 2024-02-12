<?php
class Database
{
  private $hostname;
  private $username;
  private $password;
  private $database;
  private $conn;
  public $sql;

  function  __construct($hostname = "localhost", $username = "root", $password = "", $database = "blogapp")
  {
    echo "<script>
    console.log('Testing');
</script>";
    $this->setHostname($hostname);
    $this->setUsername($username);
    $this->setPassword($password);
    $this->setDatabase($database);

    $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    $this->initalizeDatabase();

    // if ($this->conn->connect_error) {
    //   echo "<script>
    //           console.log('Connection error');
    //       </script>";
    // } else {
    //   echo "<script>
    //           console.log('Connection completed');
    //       </script>";
    // }
  }

  public function setHostname($p)
  {
    $this->hostname = $p;
  }
  public function setUsername($p)
  {
    $this->username = $p;
  }
  public function setPassword($p)
  {
    $this->password = $p;
  }
  public function setDatabase($p)
  {
    $this->database = $p;
  }

  public function getHostname()
  {
    return $this->hostname;
  }
  public function getUsername()
  {
    return $this->username;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function getDatabase()
  {
    return $this->database;
  }
  public function getConn()
  {
    return $this->conn;
  }

  // public function query($sql)
  // {
  //   $this->conn->query($sql);
  // }

  private function initalizeDatabase()
  {
    $this->sql = "SHOW DATABASE LIKE '{$this->database}'";

    // echo "<script>
    //         console.log($this->sql);
    //     </script>";

    if ($this->conn->query($this->sql)->num_rows === 0) {
      echo "<script>
            console.log('No database');
        </script>";

      //   // Include file to create database and tables
      //   // require("initialize-database.php");
      //   // include "initalize-database.php";
      // } else {
      //   echo "<script>
      //             console.log('Already have database');
      //         </script>";
      // }
      // // $this->conn->select_db($this->database);
    }
  }
}
