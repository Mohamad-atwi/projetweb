<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/base/vendor.bundle.base.css">

  <link rel="stylesheet" href="../../styles/admin_page.css">

  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/eilco-logo.png" class="mr-2" alt="logo" /></a> -->
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a> -->
        <h3 style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Eilco Portail</h3>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i> Settings
              </a>
              <a class="dropdown-item" href="../../index.php">
                <i class="ti-power-off text-primary"></i> Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./admin_page.php">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./AddStudent.php">Add Student </a></li>
                <li class="nav-item"> <a class="nav-link" href="./AddProf.php">Add Prof </a></li>
                <li class="nav-item"> <a class="nav-link" href="./View_Students.php">View Users </a></li>

              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">Cours</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./AddCourse.php">Add Cours </a></li>
                <li class="nav-item"> <a class="nav-link" href="./ViewCourses.php"> View Courses </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information personnel</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" id="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                      <label for="prenom">Prenom</label>
                      <input type="text" class="form-control" id="prenom" placeholder="Prenom">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="birthday">Birthday</label>
                      <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" placeholder="Phone number">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Information Academique</h4>

                  <form class="forms-sample">
                    <input type="checkbox">1
                    <input type="checkbox">2
                    <input type="checkbox">3 <br>
                    <br>

                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                      <select class="select">
                        <option>---</option>
                        <option>CP1</option>
                        <option>CP2</option>
                        <option>ING1</option>
                        <option>ING2</option>
                        <option>ING3</option>


                      </select>

                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email academique</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>

                    <div class="form-group ">
                      <label for="pass">Password</label>

                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">

                    </div>
                    <div class="form-group ">
                      <label for="exampleInputConfirmPassword2">Re Password</label>

                      <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">

                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                  </form>


                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../scripts/admin/js/off-canvas.js"></script>
  <script src="../../scripts/admin/js/hoverable-collapse.js"></script>
  <script src="../../scripts/admin/js/template.js"></script>
  <script src="../../scripts/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../scripts/admin/js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>