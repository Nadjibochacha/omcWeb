<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DashBoard</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
  </head>
  <body>
    <div class="menu">
      <ul>
        <li class="profile">
          <img src="../photos/tlsi.jpg" alt="profile" />
          <h2>admin</h2>
        </li>
        <li>
          <a href="#" onclick="showPart(0)"><i class="fas fa-user-group"></i>manage professors</a>
        </li>
        <li>
          <a href="#" onclick="showPart(1)"><i class="fas fa-user-group"></i>manage students</a>
        </li>
        <li>
          <a href="#" onclick="showPart(2)"><i class="fas fa-pen"></i>manage classrooms</a>
        </li>
        <li>
          <a href="#" onclick="showPart(3)"><i class="fas fa-table"></i>manage time tables</a>
        </li>
        <li>
          <a href="#" onclick="showPart(4)"><i class="fas fa-table"></i>manage session change request</a>
        </li>
        <li class="log-out">
          <a href="../backend/logout.php"><i class="fas fa-sign-out"></i>log out</a>
        </li>
      </ul>
    </div>

    <div class="content">
      <!-- prof managment 0-->
      <div class="part professors d-none">
        <div class="title">
          <p>professors managment</p>
          <i class="fas fa-chart-bar"></i>
        </div>
        <!-- form -->
        <div class="add-prof">
          <form action="../backend/operationProf.php" method="post">
            <div class="row mb-3 justify-content-center">
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >Professor name</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control" name="name" />
              </div>
            </div>
            <div class="row mb-3 justify-content-center">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >username</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control" name="username" />
              </div>
            </div>
            <div class="row mb-3 justify-content-center">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >password</label
              >
              <div class="col-sm-7">
                <input type="password" class="form-control" name="password"/>
              </div>
            </div>
            <button type="submit" class="btn btn-success w-25">add</button>
          </form>
        </div>
        <?php
        if (isset($_GET["success"])) { ?>
              <p class="seccuss"><?php echo $_GET["success"]; ?> </p>
        <?php } ?>
        
        <!-- table -->
        <table class="table manage-prof">
          
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">professor name</th>
              <th scope="col">username</th>
              <th scope="col">password</th>
              <th scope="col">modify</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            <?php include("../backend/showProf.php");?>
          </tbody>
        </table>
      </div>
      <!-- students managment -->
      <div class="part students d-none">
        <div class="title">
          <p>students managment</p>
          <i class="fas fa-chart-bar"></i>
        </div>
        <!-- form -->
        <div class="add-prof">
          <form action="../backend/operationProf.php" method="post">
            <div class="row mb-3 justify-content-center">
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >student name</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control" name="nameS" />
              </div>
            </div>
            <div class="row mb-3 justify-content-center">
              <label for="inputEmail3" class="col-sm-2 col-form-label"
                >branch</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control" name="branchS" />
              </div>
            </div>
            <div class="row mb-3 justify-content-center">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >username</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control" name="usernameS"/>
              </div>
            </div>

            <div class="row mb-3 justify-content-center">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >password</label
              >
              <div class="col-sm-7">
                <input type="password" class="form-control" name="passwordS" />
              </div>
            </div>

            <button type="submit" class="btn btn-success w-25">add</button>
          </form>
        </div>
         <?php
        if (isset($_GET["success"])) { ?>
              <p class="seccuss"><?php echo $_GET["success"]; ?> </p>
        <?php } ?>
        <!-- table -->
        <table class="table manage-prof">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">student name</th>
              <th scope="col">branch</th>
              <th scope="col">username</th>
              <th scope="col">password</th>
              <th scope="col">modify</th>
              <th scope="col">delete</th>
            </tr>
          </thead>

          <tbody>
             <?php include("../backend/showStu.php");?>
          </tbody>

        </table>
      </div>

      <!-- classroom managment 2-->
      <div class="part classroom d-none">
        <div class="title">
          <p>classroom managment</p>
          <i class="fas fa-chart-bar"></i>
        </div>
        <div class="add-class">
          <form action="../backend/operationProf.php" method="post">
            <div class="row mb-3 justify-content-center">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >class name</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control" name="nameC" />
              </div>
            </div>
            <div class="row mb-3 justify-content-center">
              <label for="inputPassword3" class="col-sm-2 col-form-label"
                >type</label
              >
              <div class="col-sm-7">
                <input type="text" class="form-control" name="typeC" />
              </div>
            </div>
            <button type="submit" class="btn btn-success w-25">add</button>
          </form>
        </div>
        <?php
        if (isset($_GET["success"])) { ?>
              <p class="seccuss"><?php echo $_GET["success"]; ?> </p>
        <?php } ?>
        <!-- table -->
        <table class="table manage-class">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">class name</th>
              <th scope="col">type</th>
              <th scope="col">modify</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            <?php include("../backend/showClass.php");?>
          </tbody>
        </table>
      </div>

      <!-- time tables managment 3-->
      <div class="part time d-none">
        <div class="title">
          <p>session managment</p>
          <i class="fas fa-chart-bar"></i>
        </div>
        <div class="add-session">
          <form class="row g-3" action="../backend/operationProf.php" method="post">
            <div class="col-md-6">
              <label class="form-label">modul</label>
              <input type="text" class="form-control" name="modul"/>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">professor</label>
              <input type="text" class="form-control" id="inputPassword4" name="prof" />
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">classroom</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress"
                name="class"
              />
            </div>
            <div class="col-3">
              <label for="inputAddress2" class="form-label">level</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress2"
                name="level"
              />
            </div>
            <div class="col-3">
              <label for="inputAddress2" class="form-label">grup</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress2"
                name="group"
              />
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">time</label>
              <input type="time" class="form-control" id="inputCity" name="time" />
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">day</label>
              <input type="text" class="form-control" name="day" />
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">add session</button>
            </div>
          </form>
          <?php
        if (isset($_GET["error"])) { ?>
              <p class="bg-danger"><?php echo $_GET["error"]; ?> </p>
        <?php } ?>
        </div>
        <?php
        if (isset($_GET["success"])) { ?>
              <p class="seccuss"><?php echo $_GET["success"]; ?> </p>
        <?php } ?>
        <!-- table -->
        <table class="table manage-class">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">modul</th>
              <th scope="col">professor</th>
              <th scope="col">classroom</th>
              <th scope="col">level & group</th>
              <th scope="col">time</th>
              <th scope="col">day</th>
              <th scope="col">modify</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            <?php include("../backend/showSession.php");?>
          </tbody>
        </table>
      </div>
      <!-- request managment -->
      <div class="part request d-none">

      </div>
    </div>
 
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
    <script src="../js/functions.js"></script>
  </body>
</html>