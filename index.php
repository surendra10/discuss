<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./client/common.php'); ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss</title>
</head>
<?php 
session_start();
include('./client/header.php'); 

if(isset($_GET['login']) && !$_SESSION["user"]["username"]){

    include('./client/login.php');

}else if(isset($_GET['signup']) && !$_SESSION["user"]["username"]){

    include('./client/signup.php');

}else if(isset($_GET['ask']) && $_SESSION["user"]["username"]){

     include('./client/ask.php');

}else{
    //
}




?>
<body>
    
</body>
</html>