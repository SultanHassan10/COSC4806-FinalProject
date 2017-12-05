<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $phone= $_POST['phone'];
    $dob= $_POST['dob'];
    $age= $_POST['age'];
    $province= $_POST['province'];
    $city= $_POST['city'];
    $designation= $_POST['designation'];
    $manager= $_POST['manager'];
    $gender= $_POST['gender'];

    $sqlProvince = "select province_name from province where province_id=$province";
    $resultProvince = mysqli_query($con,$sqlProvince);
    $provinceRowName = mysqli_fetch_assoc($resultProvince);
    $provinceName = $provinceRowName['province_name'];

    if($manager != null || $manager != ""){
        mysqli_query($con,"insert into users values(NULL,'$name','$email','$password','$gender','$city','$provinceName','$dob',$age,'$phone','$designation')");
        $result = mysqli_query($con,"SELECT user_id FROM users where type='staff' ORDER BY user_id DESC LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        $user = $row['user_id'];
        mysqli_query($con,"insert into managers values($manager,$user)");
        header('location:../../public/index.php');

    }else{
        mysqli_query($con,"insert into users values(NULL,'$name','$email','$password','$gender','$city','$provinceName','$dob',$age,'$phone','$designation')");
        header('location:../../public/index.php');
    }
}