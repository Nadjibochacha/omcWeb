<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Professor page</title>
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
    <link rel="stylesheet" href="../css/profpage.css" />
</head>
<body>
    <!-- navbar -->
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
              <a class="btn btn-primary" href="../backend/logout.php">log out</a>
      
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- table of sessions -->
    <section id="timeTable" class="container">
        <div class="title">welcome to time slot system</div>
        <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">modul</th>
              <th scope="col">classroom</th>
              <th scope="col">level & group</th>
              <th scope="col">time</th>
              <th scope="col">day</th>
            </tr>
          </thead>
          <tbody>
            <?php include("../backend/showProfss.php");?>
          </tbody>
        </table> 
    </section>
    <!-- change request -->
    <section class="change mt-5">
        <div class="title">change session form</div>
        <form class="row g-3" action="../backend/changeSession.php" method="post">
            <div class="col-3">
              <label class="form-label">modul</label>
              <input type="text" class="form-control" name="modul"/>
            </div>
             <div class="col-3">
              <label class="form-label">class</label>
              <input type="text" class="form-control" name="class"/>
            </div>
            <div class="col-3">
              <label for="inputAddress2" class="form-label">time</label>
              <input
                type="time"
                class="form-control"
                id="inputAddress2"
                name="time"
              />
              <input type="hidden" name="userP" value="<?php  echo $_GET["user"] ?>">
            </div>
            <div class="col-3">
              <label for="inputAddress2" class="form-label">day</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress2"
                name="day"
              />
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">new time</label>
              <input type="time" class="form-control" id="inputCity" name="timeN" />
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">new day</label>
              <input type="text" class="form-control" name="dayN" />
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">change session</button>
            </div>
          </form>
           <?php
        if (isset($_GET["success"])) { ?>
              <p class="seccuss"><?php echo $_GET["success"]; ?> </p>
        <?php } ?>
    </section>
</body>
</html>