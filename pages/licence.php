<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Licence</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="../css/tabStayle.css" />
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
              <a class="btn btn-primary" href="../backend/logout.php">log out</a>
      
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- body page -->
    <section id="tabs">
      <ul class="nav nav-tabs">
        <?php if ($_GET['branch'] === 'si') { ?>
                    <li class="nav-item">
                      <a
                        class="nav-link tab active"
                        aria-current="page"
                        href="#"
                        onclick="showTab(0)"
                        >SI</a
                      >
                    </li>
        <?php } ?>
        <?php if ($_GET['branch'] === 'gl') { ?>
                    <li class="nav-item">
                      <a class="nav-link tab active" href="#" onclick="showTab(1)">GL</a>
                    </li>
        <?php } ?>
      </ul>
    </section>
    <!-- time tables: -->
    <section id="timeTables">
      <?php if ($_GET['branch'] === 'si') { ?>
                  <div class="timeT">
                    <!-- time table of si -->
                    <h1 class="title">time slot of si branch</h1>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">times</th>
                          <th scope="col">sat</th>
                          <th scope="col">sun</th>
                          <th scope="col">mon</th>
                          <th scope="col">tue</th>
                          <th scope="col">wed</th>
                          <th scope="col">thu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">8:30am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">10:00am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">11:30am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">13:00am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">14:30am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
      <?php } ?>
      <?php if ($_GET['branch'] === 'gl') { ?>
                  <div class="timeT">
                    <!-- time table of gl -->
                    <h1 class="title">time slot of gl branch</h1>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">times</th>
                          <th scope="col">sat</th>
                          <th scope="col">sun</th>
                          <th scope="col">mon</th>
                          <th scope="col">tue</th>
                          <th scope="col">wed</th>
                          <th scope="col">thu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">8:30am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">10:00am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">11:30am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">13:00am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">14:30am</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
      <?php } ?>
    </section>

    <!-- footer -->
    <section id="footer">
      <div>
        Copyright © SI DEV Team Université Abdelhamid Mehri - Constantine 2.
      </div>
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
    <script src="../js/functions.js"></script>
  </body>
</html>
