<?php
// echo("<script>alert(`Sucess`);</script>"); 
session_start();
include('../shared/connection.php');
$operation_id = $_POST['operation_id'];
$userid=$_POST['user_id'];
$course=$_POST['course'];
switch($operation_id){
    case 1:
        // echo("<script>alert(`Sucess`);</script>");
        $sql1="SELECT * FROM tbl_deliverable WHERE course_id=$course";  
        $deliverable_records=mysqli_query($con,$sql1); 
            while($row=mysqli_fetch_assoc($deliverable_records)){
                $id = $row['deliverable_id'];
                $department= $row['department_id'];
                $name = $row['requirement_name'];
                if($id == 1){
                    $sql="SELECT * FROM tbl_fees_balance WHERE student_id=$userid";
                    $fee_records=mysqli_query($con,$sql);
                    $fees_balance=mysqli_fetch_assoc($fee_records);
                    $first_year = $fees_balance['first_year'];
                    $second_year = $fees_balance['second_year'];
                    $third_year = $fees_balance['third_year'];
                    $fourth_year = $fees_balance['fourth_year'];
                    
                    
                    $message = "You have Cleared all your fees";
                    $status = 1;
                    
                    if($first_year > 0){
                        $status = 3;
                        $message = "You have a fee balance of Ksh $first_year in your first year";
                    };
                    if($second_year > 0){
                        $status = 3;
                        $message = "You have a fee balance of Ksh $second_year in your Second year";
                    };
                    if($third_year > 0){
                        $status = 3;
                        $message = "You have a fee balance of Ksh $third_year in your third year";
                    };
                    if($fourth_year > 0){
                        $status = 3;
                        $message = "You have a fee balance of Ksh $fourth_year in your fourth year";
                    };
    
                   
                }
                else{
                    $status = 3;
                    $message = "";
                    // echo(" Sucess"); 
                }
                $sql = "INSERT INTO tbl_list_deliverable (deliverable_id, uploaded_file, request_date, department_id, student_id, remarks, status, department_user_id) 
                VALUES ('$id', NULL, '2023-02-11', '$department', '$userid', '$message', '$status', '2')";

                if (mysqli_query($con, $sql))  {
                    echo(" Sucess"); 
                }
                else
                {
                    echo(" Fail"); 
                }
            
               
                   
        }
        // if(array_key_exists('button1', $_POST)) {
        //     send_request($deliverable_records);
        // }
        break;
case 2:
    $deliverable = $_POST['deliverable'];
    $sql = "UPDATE tbl_list_deliverable SET status='3' WHERE student_id=$userid AND deliverable_id = $deliverable" ;
    if ($con->query($sql) === TRUE) {
        echo "Clearance Request Sent";
    } else {
        echo "Error updating record: " . $con->error;
    }
    break;
case 3:
    $user_id = $_POST['user_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo($email);


 break;
default: echo "Error";
}

?>

