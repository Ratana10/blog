<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Public</a>
          </li>
        </ul>
        <div class="d-flex gap-2">
          <?php
          session_start();
          if (isset($_SESSION['username'])) {
            echo '<a href="./auth/logout-action.php"><button class="btn btn-primary" >Create Post</button></a>';
            echo '<a href="./auth/logout-action.php"><button class="btn btn-danger" >Logout</button></a>';
          } else {
            echo '
              <a href="./auth/login.php"><button class="btn btn-primary" >Login</button></a>
              <a href="./auth/register.php"><button class="btn btn-success" >Register</button></a>
              ';
          }
          ?>
        </div>
      </div>
    </div>
  </nav>