<?php
include 'connect.php';
$q = $_REQUEST["q"];
$options ="";
$sql = "select user_name,user_id from users where type='manager'";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $options = $options."<option value='".$row['user_id']."'>".$row['user_name']."</option>";
}

echo $options;
?>