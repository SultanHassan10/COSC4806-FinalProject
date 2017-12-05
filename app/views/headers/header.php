<?php
include '../app/controllers/connect.php';
if(isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../app/views/assets/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <script src="../app/views/assets/ajax.js"></script>
    <title>Document</title>
</head>
<body onload="populateProvince()">
<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Final Project</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="phone.php">Phone Directory</a></li>
                    <?php if(isset($_SESSION['user'])){ ?>
                    <li><a href="viewClients.php">Edit</a></li>
                    <li><a href="addClient.php">Add Clients</a></li>
                     <?php if($_SESSION['user'] === "staff"){

                        }else{?>
                    <li><a href="report.php">Report</a></li>
                    <?php  }} ?>
                </ul>
                <?php if(isset($_SESSION['user'])){ ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>Welcome <b><u><?php echo $_SESSION['username'];?></u></b></li>
                    <li><form method="post"><button type="submit" class="btn btn-danger" name="logout">Logout</button></form></li>
                </ul>
                <?php } ?>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
