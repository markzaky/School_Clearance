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
      // echo($index);
    }
    break;
    // Case 2 is adding departments
    case 2:
      $name = $_POST['name'];
      $insert_department="INSERT INTO tbl_department (department_name) values ('$name')";
      mysqli_query($con,$insert_department) or die(mysqli_error($con));
      // echo($name);

      break;
    // Case 3 is for adding courses
    case 3:
      $name = $_POST['name'];
      $code = $_POST['code'];
      $insert_course="INSERT INTO tbl_course (course_code,course_description) values ('$code','$name')";
      mysqli_query($con,$insert_course) or die(mysqli_error($con));
      echo($name);
      break;
      // add department Users
    case 4:
      $f_name = $_POST['first_name'];
      $l_name = $_POST['last_name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $department = $_POST['department'];
      $username = "$f_name.$l_name";
      $full_names = "$f_name $l_name";
      $insert="INSERT INTO tbl_department_user (department_id, assigned_personnel, username, password, account_status, email, phone_number) values ('$department','$full_names','$username','$username','0','$email','$phone')";
      mysqli_query($con,$insert) or die(mysqli_error($con));
      echo($full_names);
      break;
    case 5:
      $course = $_POST['course'];
      $department = $_POST['department'];
      $deliverable_name = $_POST['deliverable_name'];
      $deliverable_desc = $_POST['deliverable_desc'];
      $insert="INSERT INTO tbl_deliverable (department_id, course_id, requirement_name, description) values ('$department','$course','$deliverable_name','$deliverable_desc')";
      mysqli_query($con,$insert) or die(mysqli_error($con));
      echo($deliverable_desc);
      break;
  }


?>
