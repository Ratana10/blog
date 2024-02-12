
<?php
include "../../entity/users.php";
include "../../service/UserService.php";


if (isset($_POST['login'])) {
  // validation
  if (empty($_POST['username']) || empty($_POST['password'])) {

    if (empty($_POST['username'])) {
      $usernameError = "username is required";
    }
    if (empty($_POST['password'])) {
      $passwordError = "password is required";
    }
    $valid = array(
      "usernameError" => $usernameError,
      "passwordError" => $passwordError,
    );

    $valid_url = http_build_query($valid);

    header("Location: ./login.php?" . $valid_url);
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  $userService = new UserService();
  $userService->login($username, $password);
}
?>