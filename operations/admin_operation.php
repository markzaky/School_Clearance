<?php
include('../shared/connection.php');
$operation = $_POST['operation_id'];
echo($operation);
switch($operation){
  case 1:
    // Importing data From add student form
    $index = $_POST['index'];
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $study_year = $_POST['study_year'];
    $course = $_POST['course'];
    $username = "$f_name.$l_name";

    // Inserting data to student table
    if($index){
      $insert="INSERT INTO tbl_student (student_id_number, last_name, first_name, course_id, year_level, contact, email_address, username, password, account_status) values ('$index','$l_name','$f_name','$course','$study_year','$phone','$email','$username','$username','2')";
      mysqli_query($con,$insert) or die(mysqli_error($con));

      $query=mysqli_query($con,"SELECT * FROM tbl_student WHERE student_id_number='$index'");
      $row=mysqli_fetch_assoc($query);
      $student_id = $row['student_id'];

      // Inserting data to fees table
      $insert_fees="INSERT INTO tbl_fees_balance (student_id, first_year,second_year,third_year, fourth_year) values ('$student_id','0','0','0','0')";
      mysqli_query($con,$insert_fees) or die(mysqli_error($con));
      echo($index);
    }
    break;
  }

?>
