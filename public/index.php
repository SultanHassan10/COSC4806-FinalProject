<?php
require_once '../app/views/headers/header.php';

if(isset($_SESSION['user'])){

    if($_SESSION['user'] == "staff"){
        require_once '../app/views/home/staff.php';
    }else if($_SESSION['user'] == "manager"){
        require_once '../app/views/home/manager.php';
    }else{
        require_once '../app/views/home/admin.php';
    }
}else{
    require_once '../app/views/home/login.php';
}


require_once '../app/views/footers/footer.php';