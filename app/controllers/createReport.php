<?php

$option = $_REQUEST['q'];
$condition = "";
include 'connect.php';
$tbody = "";
$manager_id = $_SESSION['id'];
$getUserID = "select user_id from managers where manager_id=$manager_id";
$resultUserID = mysqli_query($con,$getUserID);
if(mysqli_num_rows($resultUserID) > 0){
    $i = 1;
    while($rowUserId = mysqli_fetch_assoc($resultUserID)){
        $result;
        if($option === "A"){
            $result=mysqli_query($con,"select * from users where user_id=".$rowUserId['user_id']." and province='Ontario'");
        }elseif($option === "B"){
            $result=mysqli_query($con,"select * from users where user_id=".$rowUserId['user_id']." and age<20");
        }else{
            $result=mysqli_query($con,"select * from users where user_id=".$rowUserId['user_id']." and age>20");
        }


        $row = mysqli_fetch_assoc($result);
        $tbody = $tbody."<tr><td>$i</td><td>".$row['user_name']."</td><td>".$row['user_email']."</td><td>".$row['gender']."</td><td>".$row['province']."</td><td>".$row['city']."</td><td>".$row['dob']."</td><td>".$row['age']."</td><td>".$row['phone']."</td></tr>";
        $i++;
    }
}

echo $tbody;