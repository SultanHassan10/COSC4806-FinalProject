<?php
    include 'connect.php';
    $options = "";
    $sql= "select province_id,province_name from province";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['province_name'];
        $id = $row['province_id'];
        $options = $options."<option value='$id'>$name</option>";
    }

    echo $options;
?>