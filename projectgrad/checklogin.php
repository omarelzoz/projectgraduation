<?php
session_start();
include_once "Database.php";
$db=new Database();

   $rs=$db->GetData("SELECT * FROM fuser WHERE farmer_email ='".$_GET['email']."' and farmer_password ='".$_GET['pass']."'");

if($row=mysqli_fetch_assoc($rs))
{
   

  echo "ok";
}
else
{
    echo "<div class='alert alert-success'> Invaild Login Data </div>";
}
?>