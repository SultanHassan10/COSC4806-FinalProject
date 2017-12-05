<?php
if(!isset($_SESSION['user'])){
    header('location:index.php');
}s
require_once '../app/views/headers/header.php';
require_once '../app/views/home/phoneView.php';
require_once '../app/views/footers/footer.php';