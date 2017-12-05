<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $dob= $_POST['dob'];
    $age= $_POST['age'];
    $province= $_POST['province'];
    $city= $_POST['city'];
    $gender= $_POST['gender'];
    $notes = $_POST['notes'];
    $staffId = $_SESSION['id'];
    $sqlProvince = "select province_name from province where province_id=$province";
    $resultProvince = mysqli_query($con,$sqlProvince);
    $provinceRowName = mysqli_fetch_assoc($resultProvince);
    $provinceName = $provinceRowName['province_name'];

    mysqli_query($con,"insert into clients values(NULL,'$name','$email','$gender','$dob','$phone','$provinceName','$city',$age,'$notes',$staffId)");

    header('location:../../public/index.php');

}