<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time Solt Managment</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut ico n" href="favicon.ico" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/home.css" />
  </head>
  <body>
    <!-- head navbar -->
    <section id="header">
      <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
          <a class="navbar-brand" href="#home"
            ><img src="photos/tlsi.jpg" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
              <li class="nav-item">
                <a
                  class="nav-link item active"
                  aria-current="page"
                  href="home.html#home"
                  onclick="showHome()"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <div class="btn btn-primary mt-3 mt-lg-0" onclick="showLogin()">
                  login
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- home -->
    <section id="home">
      <!-- content -->
      <div id="content" class="container m-2 m-lg-0">
        <div class="title">time slot managment system</div>
        <div class="text">
          <p>Department of Software Technologies and Information Systems</p>
          <h3>welcome to system, you can see your timeTable in this system.</h3>
        </div>
        <button class="btn btn-primary w-25 mt-2" onclick="showLogin()">
          login
        </button>
      </div>

      <!-- login section -->
      <section id="login" class="d-none">
        <img src="photos/tlsi.jpg" alt="" />
        <form action="backend/login.php" method="post">
          <center>
            <?php if(isset($_GET['error'])){ ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="form-floating mb-3 w-75">
              <input
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="nameexample"
                name="user"
              />
              <label for="floatingInput">User Name</label>
            </div>
          </center>

          <center>
            <div class="form-floating mb-3 w-75">
              <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
                name="password"
              />
              <label for="floatingPassword">Password</label>
            </div>
          </center>

          <button type="submit" class="btn btn-primary w-25 mt-2">login</button>
        </form>
      </section>

      <!-- footer -->
      <section id="footer">
        <div>
          Copyright © SI DEV Team Université Abdelhamid Mehri - Constantine 2.
        </div>
      </section>
    </section>

    <!-- bootstrap files 
    pease don't touch this scripts
    -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script src="js/functions.js"></script>
  </body>
</html>