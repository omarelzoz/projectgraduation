<?php
session_start();
include_once "afterlogin.php";
?> 
<?php
 
include_once "Database.php";
$db = new Database();

$rs= $db->GetData("SELECT*FROM fuser WHERE (farmer_email ='" . $_SESSION['email']."')");

if ($row = mysqli_fetch_assoc($rs)) {





?>
    

<style>
.containersetting{
    width: 100%;
    height: 1000px;
   
}
.formprofile{
    margin-left: 50px;
    padding-top: 10px;
}
label{
    padding: 20px;
    font-size: 32px;
}
button{
    margin-top: 60px;
}
</style>
<div class="containersetting" >
<h1>Settings Privacy</h1>

                <hr>
<form class="formprofile" method="post">
<div class="">
    <label for="Name">Name</label>
    <input type="text" class="form-control" value="<?php echo $row["farmer_name"] ?>"    name="txtname" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" value="<?php echo $row['farmer_email'] ?>"  id="email"  name="txtemail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" value="<?php echo $row["farmer_password"] ?>"  id="password" name="txtpassword" placeholder="Password">
  </div>
  <div class="">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" value="<?php echo $row["phone_number"] ?>"   id="phone" name="txtphone" placeholder="Phone">
  </div>
  <button type="submit" name="btnupdate" class="btn btn-success">Update</button>
  </div>
  
</form>
</div>


 

<?php 
}
?>


        <?php
        if (isset($_POST["btnupdate"])) {
            include_once "Database.php";
            $db = new Database();
            $msg = $db->RunDML("update  fuser set farmer_name='" . $_POST["txtname"] . "',farmer_email= '" . $_POST["txtemail"] . "',
farmer_password='" . $_POST["txtpassword"] . "',phone_number='" . $_POST["txtphone"] . "' where farmer_email='" . $_SESSION["email"] . "'");


            if ($msg == "ok")
                echo "<h6> your account has been updated </h6>";




            else
                echo $msg;
        }

        ?>



        



<div style="margin-top: px;"> 
        <?php
        include_once "footer.php";
        ?>
        </div>
        </body>

    