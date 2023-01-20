<?php

session_start();

include_once("config.php");


 $fname = $_SESSION['fname1']  ;

 $lname = $_SESSION['lname1']  ;



 $email = $_SESSION['email1']  ;

 $cpwd = $_SESSION['cpwd1']  ;

  $cookie = $_SESSION['password']  ; 
 
  $country = $_SESSION['country'];
 
 

 $avatar="avatar/avatar.jpg";

 

 $vy= "verifyed";

$dat=date("j F Y");

$insertQ ="INSERT INTO `users`(`fname`, `lname`,  `email`, `password`, `cookies`, `avatar`, `country`,  `status`, `date`) VALUES 
('$fname','$lname','$email','$cpwd','$cookie','$avatar','$country','$vy','$dat')";

$runsQ = mysqli_query($conn, $insertQ);


if($runsQ ==true){
    header("Location:login.php?signup_success");

}else{
    

}






















?>