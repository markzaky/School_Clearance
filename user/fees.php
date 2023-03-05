<?php session_start();
include('../shared/connection.php');
if(!isset($_SESSION['username'])){
    header("location:../index.php");
    exit();
}
?>
<?php
$department_id=$_SESSION['department'];
$name=$_SESSION['name'];
// $deliverable=$_POST['deliverable'];
$query = mysqli_query($con, "SELECT * FROM tbl_department WHERE 
    department_id='$department_id'");
    $row = mysqli_fetch_assoc($query);
    $department_name = $row['department_name']

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
        
        // Approve a request
        $(".approveRequst").click(function(){
            var request_id=$(this).closest("td").find(".idx").val();
            alert(request_id);
            $.ajax({
                type:"post",
                url:"../operations/department_operation.php",
                data:{operation_id:1,request_id:request_id},
                success:function(result){
                    alert(result);
                    window.location.href = ("requests.php");

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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

            <li class="nav-item ">
                <a class="nav-link" href="deliverable.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Deliverables</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="requests.php">
                    <i class="fas fa-fw fa-file-word"></i>
                    <span>Requests</span></a>
            </li>
            <?php 
            if ($department_id==1){
                echo '<li class="nav-item active">
                <a class="nav-link" href="fees.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Fees </span></a>
            </li>';

            }
            
            ?>
            <!-- <li class="nav-item">
                <a class="nav-link" href="module.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Module </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="message.php">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Message</span></a>
            </li> -->
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo($department_name)?></span>
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
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-file"></i><?php echo($department_name)?>  Requests</h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Student Index</th>
                                            <th>Student Name</th>
                                            <th>Course</th>
                                            <th>Fees Balance</th>
                                            <th>Request Date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Requirement</th>
                                            <th>Request Date</th>
                                            <th>Student Name</th>
                                            <th>Student index</th>
                                            <th>Request Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $sql="SELECT * FROM tbl_fees_balance";
                                        $records=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_assoc($records)){
                                        $index = $row['account_id'];
                                        $year_1 = $row['first_year'];
                                        $year_2 = $row['second_year'];
                                        $year_3 = $row['third_year'];
                                        $year_4 = $row['fourth_year'];
                                        $balance = $year_1+ $year_2 + $year_3 + $year_4;
                                        $student_id = $row['student_id'];

                                        $sql1="SELECT * FROM tbl_student WHERE student_id=$student_id ";
                                        $student_records=mysqli_query($con,$sql1);
                                        $student=mysqli_fetch_assoc($student_records);
                                        $course = $student['course_id'];

                                        $sql2="SELECT * FROM tbl_course WHERE course_id=$course";
                                        $course_records=mysqli_query($con,$sql2);
                                        $course=mysqli_fetch_assoc($course_records);
                                        $status = 1;
                                        echo "<tr>
                                            <td>";
                                                
                                            echo ""." ".$student['student_id_number']." ".""."";

                                        echo"       
                                            </td>
                                            <td>";
                                               
                                            echo ""." ".$student['first_name']." ".$student['last_name']." ".""."";
                                        echo"
                                            </td>
                                            <td>";
                                            echo ""." ".$course['course_description']." ".""."";
                                            

                                            echo"
                                            </td>
                                             <td>";
                                             echo "$balance";  
                                            
                                            echo"
                                            </td>
                                            <td>";
                                                echo "$balance";                                            
                                            echo'
                                            </td>
                                            <td>';
                                                    if ($balance <= 0){
                                                        echo "<span class='badge bg-success text-white'>cleared</span>";
                                                    }
                                                    elseif($balance > 0){
                                                        echo "
                                                        <a href='#' class='send_request btn btn-primary btn-icon-split  ' data-toggle='modal' data-target='#request_model'>Send Request</a>
                                                        <input type='hidden' name='text' class= 'idx' value='$index'>
                                                        ";
                                                    }elseif($balance == 3){
                                                        echo "<a href='#' class='approveRequst btn btn-primary btn-icon-split ' data-toggle='modal' data-target='#approveModal'>Aprove Request</a>
                                                        <input type='hidden' name='text' class= 'idx' value='$clearance_request_id'>";
                                                    };
                                        echo'    
                                            </td>';
                                        //     echo'<tr>
                                        //     <td></td>
                                        //     <td>Maecenas dapibus dignissim nunc, vitae hendrerit metus blandit vel.</td>
                                        //     <td><a href="#" class="btn btn-primary btn-icon-split float-right">
                                        //         <span class="icon text-white-50">
                                        //             <i class="fas fa-file-word"></i>
                                        //         </span>
                                        //         <span class="text">View File</span>
                                        //     </a></td>
                                        //     <td><i class="fas fa-fw fa-edit"></i> | <i class="fas fa-fw fa-trash"></i></td>
                                        // </tr>';
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
                    <a class="btn btn-primary" href="../index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Approve request Model -->
    <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Request Approved</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">The student request has been aproved sucessfully.</div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" id = "approveRequst" href="#"></a> -->
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

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

</body>

</html>