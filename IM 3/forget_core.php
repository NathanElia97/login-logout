<?php
session_start();

include_once("config.php");

$email = $_REQUEST["email"];

$_SESSION['email2']=$email ;


$selectQuery = "SELECT * FROM `users` WHERE `email`='$email' ";
$runsQ = mysqli_query($conn,$selectQuery);

if ($runsQ == true) {

while ($alldata = mysqli_fetch_array($runsQ )) {
$data_email= $alldata["email"];

}

if($email==$data_email){
    header("location:forget_sendemail.php");
}else{
    header("location:forget.php?noentry");  
}

}

























?>