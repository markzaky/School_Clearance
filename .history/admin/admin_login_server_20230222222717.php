<?php
session_start();
include('../shared/connection.php');

    $username=$_GET['form-username'];
    $password=$_GET['form-password'];


if($username&&$password) {
	$connect=mysqli_connect("localhost", "root", "") or die ("Could not connect to the server");
	mysqli_select_db($connect,"clearance") or die("Couldnt connect to the database");
	$query=mysqli_query($connect,"SELECT * FROM tbl_admin WHERE admin_username='$username'
	and admin_password='$password'");
	$row=mysqli_fetch_assoc($query);
    if ($row) {
        $_SESSION['admin_username'] = $row['admin_username'];
        //header('Location:admindashboard.php');
        echo "1";
        exit();
    } else {
        echo "0";
        exit();
    }
}

?>