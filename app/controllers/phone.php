<?php
$phone = $_REQUEST['q'];
$phoneLength = strlen($phone);
if($phoneLength != 10){
       echo "Phone should be of 10 digits";
}
?>