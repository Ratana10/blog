<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Public</a>
            </li>
          </ul>
          <div class="d-flex gap-2">
            <a href="LoginPage.html"><button class="btn btn-primary" type="submit">Login</button></a>
            <a href="RegisterPage.html"><button class="btn btn-success" type="submit">Register</button></a>
          </div>
        </div>
      </div>
    </nav>

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
  </body>
</html>
