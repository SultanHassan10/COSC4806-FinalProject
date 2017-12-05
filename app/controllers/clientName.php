<?php

$name = $_REQUEST['q'];
include 'connect.php';

$sql= "select client_name from clients where client_name='$name'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    echo "Name Already Exists ! ";
}else{

}
?>