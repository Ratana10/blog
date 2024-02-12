<?php
include "../includes/header.php";
?>
<div class="container d-flex justify-content-center mt-5">
  <form style="width: 500px" method="post" action="register-action.php">
    <h1 class="fw-bold text-center mb-4">Register</h1>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" placeholder="name" name="name" />
      <label for="floatingInput">Name</label>
      <span class="text-danger">
        <?php if (!empty($_GET['nameError'])) {
          echo $_GET['nameError'];
        } ?>
      </span>
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
      <span class="text-danger">
        <?php if (!empty($_GET['usernameError'])) {
          echo $_GET['usernameError'];
        } ?>
      </span>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" placeholder="Password" name="password" />
      <label>Password</label>
      <span class="text-danger">
        <?php if (!empty($_GET['passwordError'])) {
          echo $_GET['passwordError'];
        } ?>
      </span>
    </div>
    <button class="btn btn-success mt-4" name="register">Register</button>
  </form>
</div>
<?php
include "../includes/footer.php";
?>