<?php
if(!isset($_SESSION['user'])){
    header('location:index.php');
}
require_once '../app/views/headers/header.php';
require_once '../app/views/home/editView.php';
require_once '../app/views/footers/footer.php';