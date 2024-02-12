<?php
include "../includes/header.php";
?>

<div class="container d-flex justify-content-center mt-5">
  <form style="width: 500px;" action="login-action.php" method="post">
    <h1 class="fw-bold text-center mb-4">Login</h1>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" placeholder="name@example.com" name="username">
      <label>Username</label>
      <span class="text-danger">
        <?php if (!empty($_GET['usernameError'])) {
          echo $_GET['usernameError'];
        } ?>
      </span>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" placeholder="Password" name="password">
      <label>Password</label>
      <span class="text-danger">
        <?php if (!empty($_GET['passwordError'])) {
          echo $_GET['passwordError'];
        } ?>
      </span>
    </div>
    <button class="btn btn-primary mt-4" name="login">Login</button>
  </form>
</div>
<?php
include "../includes/footer.php";
?>