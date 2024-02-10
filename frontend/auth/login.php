<?php
include "../includes/header.php";
?>

<div class="container d-flex justify-content-center mt-5">
  <form style="width: 500px;">
    <h1 class="fw-bold text-center mb-4">Login</h1>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary mt-4">Login</button>
  </form>
</div>
<?php
include "../includes/footer.php";
?>