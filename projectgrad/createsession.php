
<?Php
  session_start();
  if(isset($_GET["user"]))
  {
   
 $_SESSION["email"]=$_GET["user"];
  }else{
   setcookie("shop","",-1,"/");
  session_destroy(); 

  }
 header("location:index.php");
?>


