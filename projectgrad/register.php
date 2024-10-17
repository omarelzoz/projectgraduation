<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>

    <div class="box">

		<a href="index.php"  style="color: rgb(255, 255, 255);font-size: 40px;text-decoration: none; " class="fa-solid fa-left-long"></a>
		
		<h2>Sign Up</h2>
		<form method="post">
			<div class="inputBox">
				<input type="text" name="txtname" required="">
				<label for="">Username</label>
			</div>
            <div class="inputBox">
				<input type="text" name="txtemail" required="">
				<label for="">Email</label>
			</div>
			<div class="inputBox">
				<input type="password" name="txtpassword" required="">
				<label for="">New Password</label>
			</div>
			<div class="inputBox">
				<input type="text" name="txtphone" required="">
				<label for="">Phone number</label>
			</div>
			
			
			
               
               
           
    

			<input type="submit" name="btnregister" value="Submit">
            <div style="color:  #72dfa3;">have account!<a  style="color: #72dfa3;"  href="login.php">Login</a></div>



			<?php
if(isset($_POST["btnregister"])) {
    include_once "Database.php"; 
    
    $db = new Database();
    $msg = $db->RunDML("insert into fuser values(Default, '" . $_POST["txtname"] . "', '" . $_POST["txtemail"] . "','" . $_POST["txtphone"] . "','" . $_POST["txtpassword"] . "')");
    
    if($msg == "ok") {
        echo "Your account has been created successfully";
		header("location:login.php");
		echo "Your account has been created successfully";
    }
	
	else {
        echo "Error: " . $msg;
    }
}
?>


		</form>
	</div>


      <script src="js/bootstrap.min.js"></script>
    
</body>
</html>