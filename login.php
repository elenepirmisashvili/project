<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
    margin:50px 0px; padding:0px;
    text-align:center;
    align:center;}

input[type=text], input[type=password] {
  width: 25%;
    height: 2%;
  padding: 10px 10px;
  margin: -12px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}

h2 { text-align: center;
color: rgba(3, 6, 27, 0.45);
font-family: "Comic Sans MS";

}

button {
  background-color: gray;
  color: white;
  padding: 14px 20px;

  border: none;
  cursor: pointer;
  width: 15%;
    height:15%;
  border-radius: 4px;

}

button:hover {
  opacity: 0.8;
    background-color:darkgrey ;

}


.container {
  padding: 16px;

}

span.psw {
  float: right;
  padding-top: 16px;
}
.avatar {
    width: 15%;
    border-radius: 50%;

}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
input[type=text]:focus {
  border: 3px solid #555;

}

}

</style>

</head>
<body> <img src="../public_html/media/images/register/traveler.png" alt="Avatar" class="avatar">
<hr align="center" width="300" size="4" color="darkgrey" />



<?php
require "header.php";

if (isset($_POST['login']) ) {
    


    
    if ( empty($_POST['username'])) {
        $error = "You Must Enter Username"; }
        elseif ( empty($_POST['password'])) {
            $error = "You Must Enter Password"; }

else {
            $s='Succesfully Logined';
			session_start();
            $_SESSION['logged_user']=$_POST['username'];
			$_SESSION["password"]=$_POST["password"];
			header("Location:index.php");
}}
if(isset($_POST['login'])) {
$user=R::findOne('users','username=?',array($_POST['username']));
if($user){
    if(password_verify($_POST['password'],$user->password))
        $_SESSION['logged_usser']=$user;
        header('Location:upload1.php');}}

else {/*$error="Invalid username or password";*/ $frgt="Forgot password?";}
?>

<h2>Login</h2> 
<form method="POST">
  <div class="container">
 
        <?php if (isset($s)){?> <div class="alert alert-success" role="alert"><?php echo $s;?> </div> <?php }?>
        <?php if (isset($error)){?> <div class="alert alert-danger" role="alert"><?php echo $error;?> </div> <?php }?>
        <input type="text" name="username" class="form-control" placeholder="Username" required><br> <br> <br>
       
        <input type="password" name="password" class="form-control" placeholder="Password" required><br> <br> <br>
   
  
        <button class="button" type="submit" name="login" ">Login</button>

      <button class="button"   type="submit" name="signup" onclick="document.location.href='registration.php'">Register</button>



</div>
</form>

</body>
</html>