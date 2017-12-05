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
    $id = $_POST['id'];
    $sqlProvince = "select province_name from province where province_id=$province";
    $resultProvince = mysqli_query($con,$sqlProvince);
    $provinceRowName = mysqli_fetch_assoc($resultProvince);
    $provinceName = $provinceRowName['province_name'];

    $update = "update clients set client_name='$name',email='$email',phone='$phone',age=$age,dob='$dob',province='$provinceName',city='$city',gender='$gender',notes='$notes' where client_id=$id";

    mysqli_query($con,$update);

    header('location:../../public/index.php');

}