<?php
session_start();
if(isset($_SESSION["email"]))
include_once 'afterlogin.php';
else
include_once 'beforelogin.php';
?>

<style>
    body{
        background-color: #CCD9D3;
    }
</style>









  


  <?php 
include_once "footer.php";   
 
?>
