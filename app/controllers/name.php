<?php

$name = $_REQUEST['q'];
include 'connect.php';

$user_id = $_SESSION['id'];

$sqlmanagerid = "select manager_id from managers where user_id=$user_id";
$result = mysqli_query($con,$sqlmanagerid);
$row = mysqli_fetch_assoc($result);
$sqlManagerName = "select user_name from users where user_id=".$row['manager_id'];
$result = mysqli_query($con,$sqlManagerName);
$rowManager = mysqli_fetch_assoc($result);
$sql= "select client_name from clients where client_name='$name'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    echo "Name Already Exists ! Plaese contact ".$rowManager['user_name']." For further assistance";
}else{

}
?>