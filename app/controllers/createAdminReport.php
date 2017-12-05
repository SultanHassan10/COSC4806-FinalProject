<?php

$option = $_REQUEST['q'];
$condition = "";
include 'connect.php';
$tbody = "";
        $result;
        if($option === "A"){
            $result=mysqli_query($con,"select * from users where  province='Ontario'");
        }elseif($option === "B"){
            $result=mysqli_query($con,"select * from users where age<20");
        }else{
            $result=mysqli_query($con,"select * from users where age>20");
        }

        $i = 1;
        while($row = mysqli_fetch_assoc($result)) {

            $tbody = $tbody . "<tr><td>$i</td><td>" . $row['user_name'] . "</td><td>" . $row['user_email'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['province'] . "</td><td>" . $row['city'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['age'] . "</td><td>" . $row['phone'] . "</td></tr>";
            $i++;
        }

echo $tbody;