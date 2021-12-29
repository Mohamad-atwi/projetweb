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
              <a class="dropdown-item" href="../logout.php">
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

                  <form class="forms-sample" method="post" action="../addstudent.php">
                    <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" name="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                      <label for="prenom">Prenom</label>
                      <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Personel</label>
                      <input type="email" class="form-control" name="email_personel" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="birthday">Date De Naissance</label>
                      <input type="date" class="form-control" name="date_de_naissance" name="birthday">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number">
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">



                  <div class="form-group">
                    <select class="select" name="formation">
                      <option value="0">Formation</option>
                      <option value="1">CP1</option>
                      <option value="2">CP2</option>
                      <option value="3">ING1</option>
                      <option value="4">ING2</option>
                      <option value="5">ING3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="select" name="nationalite">
                      <option value="not set">Nationalite</option>
                      <option value="Libanais">Libanais</option>
                      <option value="Francais">Francais</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="select" name="sexe">
                      <option value="not set">Sexe</option>
                      <option value="Homme">Homme</option>
                      <option value="Femme">Femme</option>
                    </select>
                  </div>


                  <div class="form-group ">
                    <label for="pass">Adresse</label>

                    <input type="text" class="form-control" name="Adresse" placeholder="Addresse">

                  </div>
                  <div class="form-group ">
                    <label for="exampleInputConfirmPassword2">Complement d'Adresse</label>

                    <input type="text" class="form-control" name="ComplementAdresse" placeholder="(Facultatif)">

                  </div>
                  <button class="btn btn-primary mr-2" name="submitBtn">
                    Submit
                  </button>

                  </form>


                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
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