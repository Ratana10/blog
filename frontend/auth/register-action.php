
<?php
include "../../entity/users.php";
include "../../service/UserService.php";


if (isset($_POST['register'])) {
  if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password'])) {
    if (empty($_POST['name'])) {
      $nameError = "name is required";
    }
    if (empty($_POST['username'])) {
      $usernameError = "username is required";
    }
    if (empty($_POST['password'])) {
      $passwordError = "password is required";
    }
    $valid = array(
      "nameError" => $nameError,
      "usernameError" => $usernameError,
      "passwordError" => $passwordError,
    );

    $valid_url = http_build_query($valid);

    header("Location: ./register.php?" . $valid_url);
  }




  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = new User(1, $name, $gender, $username, $password);

  $userService = new UserService();
  $userService->register($user);
}
?>