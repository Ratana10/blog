<?php
include "../includes/header.php";
?>
<div class="container d-flex justify-content-center mt-5">
  <form style="width: 500px" method="post" action="register.php">
    <h1 class="fw-bold text-center mb-4">Register</h1>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" placeholder="name" value="name" />
      <label for="floatingInput">Name</label>
    </div>

    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" value="M" checked>
      <label class="form-check-label">Male</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" value="F">
      <label class="form-check-label">Female</label>
    </div>


    <div class="form-floating mb-3 mt-2">
      <input type="name" class="form-control" placeholder="nameexample" name="username" />
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" placeholder="Password" name="password" />
      <label>Password</label>
    </div>
    <button class="btn btn-success mt-4" name="register">Register</button>
  </form>
</div>
<?php
include "../includes/footer.php";
?>

<?php
include "../../entity/users.php";
include "../../service/UserService.php";


if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = new User($name, $gender, $username, $password);

  $userService = new UserService();
  $userService->register($user);
}
?>