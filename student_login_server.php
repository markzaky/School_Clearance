<?php
session_start();
$index_no=$_GET['form-username'];
$password=$_GET['form-password'];


if($index_no&&$password){
	$connect=mysqli_connect("localhost", "root", "") or die ("Could not connect to the server");
	mysqli_select_db($connect,"clearance") or die("Couldnt connect to the database");
	$query=mysqli_query($connect,"SELECT * FROM tbl_student WHERE student_id_number='$index_no'
	and password='$password'");
	$row=mysqli_fetch_assoc($query);
	if($row)
{
			$_SESSION['id']=$row['student_id'];
			$_SESSION['index_no']=$row['student_id_number'];
			$_SESSION['first_name']=$row['first_name'];
			$_SESSION['last_name']=$row['last_name'];
			$_SESSION['email']=$row['email_address'];
			$_SESSION['course']=$row['course_id'];
			$d="SELECT tbl_student.student_id, tbl_student.course_id, tbl_course.course_description FROM
			tbl_student INNER JOIN tbl_course ON
			tbl_student.course_id=tbl_course.course_id WHERE tbl_student.student_id_number='$index_no'";
			$department=mysqli_query($connect, $d);
			$row=mysqli_fetch_assoc($department);
			$_SESSION['department']=$row['course_description'];
			echo "1";
			exit;
			
}
		else {
			header('location:index.php?failed=failed');
			echo "Wrong username or password";
			// echo "0";
			exit;
		}
	
}



?>