<?php
$email = $_REQUEST['q'];

$check = explode("@",$email,2);
if(end($check) != "@algomau.ca"){
    echo "email must end with @algomau.ca";
}
?>