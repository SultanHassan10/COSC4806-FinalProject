<?php
include 'connect.php';
$q = $_REQUEST["q"];
$options = "";
$sql= "select cities_name from cities where province_id=$q";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
    $options = $options."<option value='".$row['cities_name']."'>".$row['cities_name']."</option>";
}

echo $options;
?>