<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="ti-icons\css\themify-icons.css">
    <link rel="stylesheet" href="C:\wamp64\www\template\css\style.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/eilco-logo.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a> -->
            <h3 style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Eilco Portail</h3>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    
                <ul class="navbar-nav navbar-nav-right">
                 
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i> Settings
                            </a>
                            <a class="dropdown-item">
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
                        <a class="nav-link" href="index.html">
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
                                <li class="nav-item"> <a class="nav-link" href="./basic_elements.html">Add User </a></li>
                                <li class="nav-item"> <a class="nav-link" href="./basic-table.html">View Users </a></li>
                                
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
                                <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.html">Add Cours </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> View Courses </a></li>
                            </ul>
                        </div>
                    </li>
               </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                 
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title mb-0">Online User</p>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Type</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mostapha</td>
                                                    <td>1</td>
                                                    <td>mostaphayoussef@eilco.com</td>
                                                    <td><label class="badge badge-danger">Offline</label></td>
                                                </tr>
                                                <tr>
                                                    <td>Mostapha</td>
                                                    <td>1</td>
                                                    <td>mostaphayoussef@eilco.com</td>
                                                    <td><label class="badge badge-danger">Offline</label></td>
                                                </tr>
                                                <tr>
                                                    <td>Mostapha</td>
                                                    <td>1</td>
                                                    <td>mostaphayoussef@eilco.com</td>
                                                    <td><label class="badge badge-success">Online</label></td>
                                                </tr>
                                                <tr>
                                                    <td>Mostapha</td>
                                                    <td>1</td>
                                                    <td>mostaphayoussef@eilco.com</td>
                                                    <td><label class="badge badge-success">Online</label></td>
                                                </tr>
                                        
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">To Do Lists</h4>
                                    <div class="list-wrapper pt-2">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Become A Travel Pro In One Easy Lesson
                          </label>
                                                </div>
                                                <i class="remove ti-trash"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            See The Unmatched Beauty Of The Great Lakes
                          </label>
                                                </div>
                                                <i class="remove ti-trash"></i>
                                            </li>
                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Copper Canyon
                          </label>
                                                </div>
                                                <i class="remove ti-trash"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            Top Things To See During A Holiday In Hong Kong
                          </label>
                                                </div>
                                                <i class="remove ti-trash"></i>
                                            </li>
                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Travelagent India
                          </label>
                                                </div>
                                                <i class="remove ti-trash"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-items d-flex mb-0 mt-4">
                                        <input type="text" class="form-control todo-list-input mr-2" placeholder="Add new task">
                                        <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i
                        class="ti-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
           
                <!-- partial -->
            </div>
            
            <!-- main-panel ends -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="first__">
                    <div class="first__1">
                        <?php
                            $d=strtotime("today");
                            echo date("l", $d) . "<br><br>";
                            echo date("F", $d) . "<br>";
                            echo date("d",$d) . "<br><br>";
                            echo date("Y", $d) . "<br>";
                        ?>
                    </div>
                </div>
                <div class="second">
                    
                </div>
                <div class="third">
                    <div class="third_2">
                        <div class="borders_2">
                            <p>Today</p>
                        </div>
                        <div class="borders_3">
                            <p>8:00 h</p>
                        </div>
                    </div>
                    <div class="third_1">
                        <div class="borders">
                            <p>Today</p>
                        </div>
                    </div>
                    <div class="third_1">
                        <div class="borders">
                            <p>Today</p>
                        </div>
                    </div>
                    <div class="third_1">
                        <div class="borders">
                            <p>Today</p>
                        </div>
                    </div>
                    <div class="third_1">
                        <div class="borders">
                            <p>Today</p>
                        </div>
                    </div>
                    <div class="third_1">
                        <div class="borders">
                            <p>Today</p>
                        </div>
                    </div>
            </nav>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <!-- <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/todolist.js"></script> -->
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->

</body>

</html>