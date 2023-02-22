<?php session_start();
include('shared/connection.php');
if(!isset($_SESSION['index_no'])){
    header("location:index.php");
    exit();
}
?>
<?php
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Clearance</title>

    <!-- Custom fonts for this template-->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<script src="./js/jquery-3.2.1.min.js"></script>
<script>
                $(function(){
                    var user_id="<?php echo $_SESSION['id'];?>";
                    var user_email="<?php echo $_SESSION['email'];?>";
                    var course="<?php echo $_SESSION['course'];?>";

                    // Request Full Clearance
                    $("#request_clearance").click(function(){
                        // alert(course);
                        // $course = $_SESSION['course'];
                        $.ajax({
                            type:"post",
                            url:"operations/clearance_operation.php",
                            data:{operation_id:1,user_id:user_id,
                                course:course},
                            success:function(result){
                                // swal("",(result),"success");
                                alert(result);
                                // window.location.href = ("student_deliverable.php");

                            }
                        });
                        //  alert("Hello");

                    })
                    // Request Full Clearance
                    $('.send_request').click(function(){
                        var deliverable_id=$(this).closest("td").find(".idx").val();
                        // alert(deliverable_id);
                        $.ajax({
                            type:"post",
                            url:"operations/clearance_operation.php",
                            data:{operation_id:2,user_id:user_id,
                                course:course,deliverable:deliverable_id},
                            success:function(result){
                                // swal("",(result),"success");
                                // alert(result);
                                // window.location.href = ("student_deliverable.php");

                            }
                        });
                    })

                });
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
                <div class="sidebar-brand-text mx-3">STUDENT PANEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="student_index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="student_deliverable.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Deliverables</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="student_profile.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
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
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for.."
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                    echo ""." ".$_SESSION['first_name']." ".$_SESSION['last_name']."<br>"."";
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="./assets/img/undraw_profile.svg">
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
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
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
                    <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-file"></i>List of Deliverables</h1>
                    <?php
                        $sql="SELECT * FROM tbl_list_deliverable WHERE student_id=$id";
                        $records=mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($records);
                        
                        if(!$row){
                            echo( '<a id = "request_clearance" class="btn btn-primary btn-icon-split float-right " data-toggle="modal" data-target="#request_model">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Request Clearance</span>
                        </a><br><br>');
                        }              
                    ?>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Requirement Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Message</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Requirement Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Message</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        // $sql="SELECT * FROM tbl_list_deliverable WHERE student_id=$id";
                                        // $records=mysqli_query($con,$sql);
                                    
                                        // $row=mysqli_fetch_assoc($records);
                                        // // $row=mysqli_fetch_assoc($records);
                                        
                                        // $index = $row['deliverable_id'];
                                        // $sql2="SELECT * FROM tbl_deliverable WHERE deliverable_id = $index";
                                        // $records2=mysqli_query($con,$sql2);
                                        // $row1=mysqli_fetch_assoc($records2);
                                      
                                        $sql="SELECT * FROM tbl_list_deliverable WHERE student_id=$id";
                                        $records=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_assoc($records)){
                                        $index = $row['deliverable_id'];
                                        $sql2="SELECT * FROM tbl_deliverable WHERE deliverable_id = $index";
                                        $records2=mysqli_query($con,$sql2);
                                        $row1=mysqli_fetch_assoc($records2);
                                        echo "<tr>
                                            <td>";
                                                
                                                echo ""." ".$row1['requirement_name']." ".""."";
                                        echo"       
                                            </td>
                                            <td>";
                                               
                                                echo ""." ".$row1['description']." ".""."";
                                        echo"
                                            </td>
                                            <td>";
                                                    $status = $row['status'];
                                                    if ($status == 1){
                                                        echo "<span class='badge bg-success text-white'>cleared</span>";
                                                    }
                                                    elseif ($status == 2){
                                                        echo "<span class='badge bg-danger text-white'>not cleared</span>";
                                                    }
                                                    elseif ($status == 3){
                                                        echo "<span class='badge bg-info text-white'>Request Sent</span>";
                                                    };
                                                    
                                        echo"</td> <td>";
                                                    
                                         
                                                    echo ""." ".$row['remarks']." ".""."";
                                                
                                        echo'
                                            </td>
                                            <td>';
                                                    if ($status == 1){
                                                        echo "<span class='badge bg-success text-white'>cleared</span>";
                                                    }
                                                    elseif($status == 2){
                                                        echo "
                                                        <a href='#' class='send_request btn btn-primary btn-icon-split float-right' data-toggle='modal' data-target='#request_model'>Send Request</a>
                                                        <input type='hidden' name='text' class= 'idx' value='$index'>
                                                        ";
                                                    }elseif($status == 3){
                                                        echo "<a href='#' class='send_request btn btn-primary btn-icon-split float-right' data-toggle='modal' data-target='#request_model'>Resend Request</a>
                                                        <input type='hidden' name='text' class= 'idx' value='$index'>";
                                                    };
                                        echo'    
                                            </td>
                                            
                                           
                                        </tr>';
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="request_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Request Sent</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Your clearance request has been recived, we will get back to you soon</div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> -->
                    <a class="btn btn-primary" href="student_deliverable.php">OK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/js/demo/datatables-demo.js"></script>

</body>

</html>