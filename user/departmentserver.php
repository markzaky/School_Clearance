<?php
session_start();
include('../shared/connection.php');

    $username=$_GET['form-username'];
    $password=$_GET['form-password'];


if($username&&$password) {

    $query = mysqli_query($con, "SELECT * FROM tbl_department_user WHERE 
    username='$username' 
    and password='$password'");
    $row = mysqli_fetch_assoc($query);
    if ($row) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['department'] = $row['department_id'];
        $_SESSION['name'] = $row['assigned_personnel'];
        // $_SESSION['userid'] = $row['user_id']
        //header('Location:admindashboard.php');
        echo "1";
        exit();
    } else {
        echo "0";
        exit();
    }
}

?>