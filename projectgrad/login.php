<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <div class="box">
		
		<a href="index.php"  style="color: rgb(255, 255, 255);font-size: 40px;text-decoration: none; " class="fa-solid fa-left-long"></a>
		
		
		

		
		<h2>Login</h2>
 













    
	
		<form method="post">
			<div class="inputBox">
				<input id="txtemail" type="text"   placeholder="email">
				<label for="txtemail">Email</label>
			</div>
			<div class="inputBox">
				<input id="txtpassword" type="password" >
				<label for="txtpassword">Password</label>
			</div>
            <div><a style="color:  #72dfa3;" href="">Forget password</a></div>


             
            <div id="dv" class="text-success">

            </div>


			

<button class="btn btn-success" onclick="login()" type="button"  >Log in </button>





 

      
            <div style="color:  #72dfa3;"> Dont have account!<a  style="color: #72dfa3;"  href="register.php">Sign up</a></div>
 
		</form> 

		<script>
        

        function login() {
        

            var email = document.getElementById("txtemail").value;
            var pass = document.getElementById("txtpassword").value;
           

            var xhttp;
            xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                   

                    var result = this.responseText;
                    if (result == "ok") {

                        window.open("createsession.php?user=" + email + "", '_self');
                    } else
                        document.getElementById("dv").innerHTML = this.responseText;





                } else
                    document.getElementById("dv").innerHTML = this.responseText;
            }
            xhttp.open("GET", "checklogin.php?email=" + email + "&pass=" + pass, true);
            xhttp.send();


        }
      
        </script>
	</div>


      <script src="js/bootstrap.min.js"></script>
    
</body>
</html>