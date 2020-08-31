<?php
session_start();
include("/var/www/html/getflix/scripts/connectdb.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/getflix/css/styles.css" />
</head>
<body>
<div class="container-fluid">
    <?php include('/var/www/html/getflix/home/navbar.php');?>
    <div class="row m-4 justify-content-center">
        <h2>Dashboard</h2> 
    </div>
    <div class="row m-3 justify-content-center">
        <a class="btn btn-dark dashboardButton" href='/getflix/dashboard/user/dashboarduser.php' role="button">Edit users database</a>
    </div>
    <div class="row m-3 justify-content-center">
        <a class="btn btn-dark dashboardButton" href='/getflix/dashboard/movies/dashboardmovies.php?sort=id&order=ASC' role="button">Edit movies database</a>
    </div>
    <div class="row m-3 justify-content-center">
        <a class="btn btn-dark dashboardButton" href='/getflix/dashboard/comments/dashboardcomments.php' role="button">Edit comments database</a>
    </div>
    <div class="row m-5 justify-content-center">
        <a class='btn btn-dark'  role='button' href='/getflix/home/home.php'>Back</a>
    </div>
</div>

<!--JS Scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>    