<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StudentAndFacultyClearance</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" style="background-color: #003043">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage
            </div>

            <li class="nav-item">
                <a class="nav-link" href="course.php">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Course</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="department.php">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Department</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="users.php">
                    <i class="fas fa-fw fa-user-lock"></i>
                    <span>Users</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="student.php">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Student</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faculty.php">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Faculty</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="deliverable.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Deliverables</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="faculty-report.php">By Faculty</a>
                        <a class="collapse-item" href="student-report.php">By Student</a>   
                        <a class="collapse-item" href="department-report.php">By Department</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">John Doe</span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-chart-bar"></i> Reports</h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="chart-title">
                                          <h4>Student Clearance Report</h4>
                                       </div>
                                       <table class="table table-bordered mytable">
                                          <thead>
                                             <th>Department</th>
                                             <th>Completed</th>
                                             <th>Incomplete</th>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Department 1</td>
                                                <td>500</td>
                                                <td>500</td>
                                             </tr>
                                             <tr>
                                                <td>Department 2</td>
                                                <td>650</td>
                                                <td>500</td>
                                             </tr>
                                             <tr>
                                                <td>Department 3</td>
                                                <td>700</td>
                                                <td>500</td>
                                             </tr>
                                             <tr>
                                                <td>Department 4</td>
                                                <td>500</td>
                                                <td>500</td>
                                             </tr>
                                             <tr>
                                                <td>Department 5</td>
                                                <td>600</td>
                                                <td>500</td>
                                             </tr>
                                             <tr>
                                                <td>Department 6</td>
                                                <td>500</td>
                                                <td>550</td>
                                             </tr>
                                             <tr>
                                                <td>Department 7</td>
                                                <td>500</td>
                                                <td>800</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="chart-title">
                                          <h4>Clearance Report by Student by Department</h4><br>
                                       </div>
                                       <canvas id="bargraph"></canvas>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="../assets/js/chart.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["Department 1","Department 2","Department 3","Department 4","Department 5","Department 6","Department 7"],
            datasets: [{
               label: 'Completed',
               backgroundColor: 'rgb(79,129,189)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [500,500,100,1500,1150,500,500]
            },
            {
               label: 'Incomplete',
               backgroundColor: 'rgb(192,80,77)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [560,145,600,300,600,120,350]
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: true,
               }
            }
         });

      });
   </script>

</body>

</html>