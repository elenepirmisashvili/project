<?php
$connection=mysqli_connect('localhost','root','','site');
if ($connection==false){
    echo mysqli_connect_error();
}
?>