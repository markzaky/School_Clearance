<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<script>
    function checkuserlogin(){
        
        var username = document.getElementById("form-username").value;
        var password = document.getElementById("form-password").value;
        var xml=new XMLHttpRequest();
        xml.onreadystatechange=function(){

            document.getElementById("load").innerHTML="<img src='assets/img/blue.gif' width='70px'>";
            if(xml.readyState==4 && xml.status==200){
                var thevalue= xml.responseText;
                setTimeout(function () {
                    if(thevalue=="1"){
                        // swal("","Logged in Successfully","success");
                        setTimeout(function () {
                            window.location.href="student_index.php";
                        },2000)

                    } else
                    {
                        // swal("",("Wrong Username or Password"),"error");
                        setTimeout(function () {
                            document.getElementById("load").innerHTML="<p class = 'badge bg-danger text-white' >Incorrect Username or Password</p>";
                        },2000);
                    }
                },2000)

            }

        };
        xml.open("GET", "student_login_server.php?form-username="+username+"&form-password="+password, true);
        xml.send();
        console.log(xml.responseText);
    }

    // $(document).keydown(function(e){
    //     switch (e.which){
    //         case 13:
    //             checkuserlogin();
    //             break;
    //         default:
    //     }
    // })
</script>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                
                                <div id="status" style="color: red;"></div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Student Login</h1>
                                        <div id="load"></div>
                                    </div>
                                    
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="form-username" aria-describedby="emailHelp"
                                                placeholder="Index Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="form-password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a onclick="checkuserlogin();" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        <a href="./admin/admin_login.php" class="btn btn-primary btn-user btn-block">
                                            Admin Login
                                        </a>
                                        
                                        <a href="./user/user_login.php" class="btn btn-primary btn-user btn-block">
                                            Department Login
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>