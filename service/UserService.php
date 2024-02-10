<?php
interface IUserService
{
  public function register($user);
  public function login($username, $password);
}

class UserService implements IUserService
{
  public function register($user)
  {
    session_start();

    $_SESSION['userId'] = $user->getId();
    $_SESSION['username'] = $user->getUsername();

    header("Location: ../index.php");

    echo "Testing";
  }
  public function login($username, $password)
  {
    session_start();

    

    header("Location: ../index.php");
  }
}
