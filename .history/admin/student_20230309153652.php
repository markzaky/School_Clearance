<?php
include('../shared/connection.php');
// if(!isset($_SESSION['admin_username'])){
//     header("location:admin_login.php");
//     exit();
// }
?>
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
<script src="../js/jquery-3.2.1.min.js"></script>
<script>

    $(function(){
        
        // Request Full Clearance
        $("#addStudent").click(function(){
          
            var index = document.addStudent.index_no.value;
            var first_name = document.addStudent.first_name.value;
            var last_name = document.addStudent.last_name.value;
            var phone = document.addStudent.phone_no.value;
            var email = document.addStudent.email_add.value;
            var study_year = document.addStudent.study_year.value;
            var course = document.addStudent.course.value;

            $.ajax({
                type:"post",
                url:"../operations/admin_operation.php",
                data:{operation_id:1,index:index,
                    first_name:first_name, last_name:last_name, phone:phone, email:email,study_year, course:course},
                success:function(result){
                    window.location.href = ("student.php");

                }
            });

        })
    })
</script>
    
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
                <a class="nav-link" href="schools.php">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Schools</span></a>
            </li>
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
            <li class="nav-item active">
                <a class="nav-link" href="student.php">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Student</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="deliverable.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Deliverables</span></a>
            </li>
            <li class="nav-item">
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
                                <!-- <a class="dropdown-item" href="#">
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
                                <div class="dropdown-divider"></div> -->
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
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-user-graduate"></i> Students</h1>
                                    <a href="#" data-toggle="modal" data-target="#AddStudentModal" class="btn btn-primary btn-icon-split float-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Add Student</span>
                                    </a><br><br>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID No.</th>
                                            <th>Complete Name</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID No.</th>
                                            <th>Complete Name</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        
                                        $sql = "SELECT * FROM `tbl_student`  \n"
                                            . "ORDER BY `tbl_student`.`student_id` ASC;";
                                        
                                        $records=mysqli_query($con,$sql);
                                        
                                        while($student=mysqli_fetch_assoc($records)){
                                            $index = $student['student_id'];
                                            $id_number = $student['student_id_number'];
                                            $first_name = $student['first_name'] ;
                                            
                                            $last_name = $student['last_name'] ;
                                            $full_names = "$first_name $last_name";
                                            $year_level = $student['year_level'];
                                            $contact = $student['contact'];
                                            $email_address = $student['email_address'];

                                            $check = "SELECT * FROM tbl_list_deliverable WHERE student_id = $index \n"
                                            . "ORDER BY `tbl_list_deliverable`.`status` ASC;";
                                            $clearance_records=mysqli_query($con,$check);
                                            while($clearance=mysqli_fetch_assoc($clearance_records)){
                                                $clearance_status = $clearance['status'];
                                                if ($clearance_status == 1){
                                                    $sql = "UPDATE tbl_student SET account_status='1' WHERE student_id=$index";
                                                    if ($con->query($sql) === TRUE) {
                                                        echo "Password Updated";
                                                    } else {
                                                        echo "Error updating record: " . $con->error;
                                                    }
                                                }
                                                else{
                                                    $sql = "UPDATE tbl_student SET account_status='2' WHERE student_id=$index";
                                                    if ($con->query($sql) === TRUE) {
                                                        echo "Password Updated";
                                                    } else {
                                                        echo "Error updating record: " . $con->error;
                                                    }
                                                }
                                                // echo "<p>$clearance_status</p>";
                                            }
                                            $student_course = $student['course_id'];
                                            $sql="SELECT * FROM tbl_course WHERE course_id=$student_course";
                                            $course_records=mysqli_query($con,$sql);
                                            $course_info=mysqli_fetch_assoc($course_records);
                                            $course_name = $course_info['course_description'];
                                            echo"<tr>
                                            <td>$id_number</td>
                                            <td>$full_names</td>
                                            <td>$course_name</td>
                                            <td>$year_level</td>
                                            <td>$contact</td>
                                            <td>$email_address</td> 
                                            <td>";
                                            $status = $student['account_status'];
                                            if ($status == 1){
                                                echo "<span class='badge bg-success text-white'>cleared</span>";
                                            }
                                            else{
                                                echo "<span class='badge bg-danger text-white'>not cleared</span>";
                                            };
                                            echo"
                                            </td>
                                            </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AddStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="" name='addStudent'>
                <div class="modal-body">
                
                    <input id='index_no' type="text" class="form-control bg-light border-0 small" placeholder="Index Number"
                        aria-label="Search" aria-describedby="basic-addon2">
                        <br>
                    <input id='first_name' type="text" class="form-control bg-light border-0 small" placeholder="First Name"
                        aria-label="Search" aria-describedby="basic-addon2">
                        <br>
                    <input id='last_name' type="text" class="form-control bg-light border-0 small" placeholder="Last Name"
                        aria-label="Search" aria-describedby="basic-addon2">
                        <br>
                    <input id='phone_no' type="text" class="form-control bg-light border-0 small" placeholder="Phone Number"
                        aria-label="Search" aria-describedby="basic-addon2">
                        <br>
                    <input id='email_add' type="text" class="form-control bg-light border-0 small" placeholder="Email"
                        aria-label="Search" aria-describedby="basic-addon2">
                        <br>
                    <input id='study_year' type="text" class="form-control bg-light border-0 small" placeholder="Year of Study"
                        aria-label="Search" aria-describedby="basic-addon2">
                        <br>
                        <select id="course" class="form-control bg-light border-0 small" >
                        <?php          
                            $sql = "SELECT * FROM `tbl_course`  \n"
                                . "ORDER BY `tbl_course`.`course_description` ASC;";
                            $course_records=mysqli_query($con,$sql);
                                        
                            while($course_select=mysqli_fetch_assoc($course_records)){
                                $course_id = $course_select['course_id'];
                                $course_description = $course_select['course_description'];
                                echo "<option value='$course_id'>$course_description</option>";
                            };
                            ?>
                           
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button  id='addStudent'  class="btn btn-primary" type="button" >Add Student</button>
                        
                    </div>
                </form>
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

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

</body>

</html>