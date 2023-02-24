<?php
// echo("<script>alert(`Sucess`);</script>"); 
session_start();
include('../shared/connection.php');
$operation_id = $_POST['operation_id'];

switch($operation_id){
    case 1:
        $request_id=$_POST['request_id'];
        // $deliverable = $_POST['deliverable'];
        $sql = "UPDATE tbl_list_deliverable SET status='1',remarks='You have been cleared' WHERE list_id=$request_id";
        if ($con->query($sql) === TRUE) {
            echo "Student Approved";
        } else {
            echo "Error updating record: " . $con->error;
        }
    break;

default: echo "Error";
}

?>

