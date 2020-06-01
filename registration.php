<?php

require "header.php";

require "rb.php";
R::setup('mysql:host=localhost;dbname=site',
    'root', '');
$con = mysqli_connect("localhost", "root", "", "site");

session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $passwordrepeat = ($_POST['passwordrepeat']);


    if (empty($_POST['username'])) {
        $error = "You must ender username"; }
    else{$username=$_POST['username'];
        $lower=strtolower($username);}



    if($username!=$lower){
        $error="Only (a-z)";}

    elseif (strlen($username) < 2 || strlen($username) > 10) {
        $error = "Incorret username";}


    elseif (!preg_match("#[A-Z]+#", $password)) {
        $error = "Password must include at least one CAPS!";}

    elseif (!preg_match("#[0-9]+#", $password)) {
        $error = "Password must include (0-9)!";}

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error="Email is invalid";}
    elseif (strlen($password) < 8 || strlen($password) > 16) {
        $error = "Change password lenght";}

    elseif ($password != $passwordrepeat) {
        $error = "Please repeat correct password";}
    elseif(empty($error)){
        $user=R::dispense('users');
        $user->username=$_POST['username'];
        $user->email=$_POST['email'];
        $user->password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $user->passwordrepeat=password_hash($_POST['passwordrepeat'],PASSWORD_DEFAULT);
        R::store($user);
        $s="Registration Completed";
        header("Location:upload.php");
    }

    else($error="busy");
}











?>

<html>



<style>
    .custom-select {
        position: relative;
        font-family: Arial;
        margin-left: 42%;
    }

    .custom-select select {

        display: none;
    }

    .select-selected {
        background-color: #515151;

    }


    .select-selected:after {

        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
    }


    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
    }


    .select-items div,.select-selected {
        color: #ffffff;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
        cursor: pointer;
        user-select: none;
    }


    .select-items {
        position: absolute;
        background-color: grey;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
    }


    .select-hide {
        display: none;
    }

    .select-items div:hover, .same-as-selected {
        background-color: rgba(0, 0, 0, 0.1);
    }
    body {font-family: Arial, Helvetica, sans-serif;
        background
        margin:50px 0px; padding:0px;
        text-align:center;
        align:center;}

    input[type=text], input[type=password] {
        width: 25%;
        height: 2%;
        padding: 15px 15px;
        margin: 8px 0;
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
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 10%;
        height:10%;
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

<body>

<div class="container">
    <form  class="form-signin" method="POST">
        <br><br><img src="../public_html/media/images/register/traveler.png" alt="Avatar" class="avatar">

        <hr align="center" width="300" size="4" color="darkgrey" />
       <h2>Create an account</h2>

        <?php if (isset($s)){?> <div class="alert alert-success" role="alert"><?php echo $s;?> </div> <?php }?>
        <?php if (isset($error)){?> <div class="alert alert-danger" role="alert"><?php echo $error;?> </div> <?php }?>
        <input type="text" name="username" class="form-control" placeholder="Username" required><br>
        <input type="text" name="email" class="form-control" placeholder="Email" required><br>
        <input type="password" name="password" class="form-control" placeholder="Password" required><br>
        <input type="password" name="passwordrepeat" class="form-control" placeholder="Confirm password" required><br>
        <h5>Gender</h5>
        <label class="container" for="gender-m">Male
            <input type="radio" checked="checked" name="gender" value="m" id="gender-m"/>
            <span class="checkmark"></span>
        </label>
        <label class="container" for="gender-f">Female
            <input type="radio" name="gender" value="f" id="gender-f"/>
            <span class="checkmark"></span>
        </label>
        <br>
        <br>
        <div class="custom-select" style="width:200px;">

        </div>


        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign Up</button>
        <button class="button"   type="submit" name="signup" onclick="document.location.href='login.php'">Login</button>
    </form>
</div>

<br>



</body>
</html>
