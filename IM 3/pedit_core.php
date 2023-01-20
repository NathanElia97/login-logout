<?php

include_once("config.php");

if(!isset($_COOKIE["login"])){
    header("location:index.php");
}


if(isset($_COOKIE["login"])){
    $cookie = $_COOKIE["login"];
   }
   
   //select query 
   
   
   $selectQuery = "SELECT * FROM `users` WHERE `cookies`='$cookie' "; 
   $runsQ = mysqli_query($conn,$selectQuery);
   
   if ($runsQ == true) {
   
   while   ($alldata = mysqli_fetch_array($runsQ )) {
   $email= $alldata["email"];
   }
   
   }
   

//get user from value  

$fname =htmlspecialchars($_REQUEST["fname"]);

if(strlen($fname) >= 1){

    $updatereferpoint = "UPDATE `users` SET `fname`='$fname' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}


 $lname =htmlspecialchars( $_REQUEST["lname"]);

if(strlen($lname) >= 1){

    $updatereferpoint = "UPDATE `users` SET `lname`='$lname' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}

  

$mobile =htmlspecialchars($_REQUEST["mobile"]) ;

if(strlen($mobile) >= 1){

    $updatereferpoint = "UPDATE `users` SET `mobile`='$mobile' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}



 $bankname =htmlspecialchars( $_REQUEST["bankname"]);
 if(strlen($bankname) >= 1){

    $updatereferpoint = "UPDATE `users` SET `Bank_Name`='$bankname' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}


 $bankaccount =htmlspecialchars( $_REQUEST["bankaccount"]);
 if(strlen($bankaccount) >= 1){

    $updatereferpoint = "UPDATE `users` SET `bank_account`='$bankaccount' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}



 $bankaccountnumber =htmlspecialchars( $_REQUEST["bankaccountnumber"]);

if(strlen($bankaccountnumber) >= 1){

    $updatereferpoint = "UPDATE `users` SET `bank_account_number`='$bankaccountnumber' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}













$country =htmlspecialchars($_REQUEST["country"]) ;

if(strlen($country) >= 1){

    $updatereferpoint = "UPDATE `users` SET `country`='$country' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}



$pwd =htmlspecialchars($_REQUEST["pwd"]) ;

$newcookie = sha1(md5($email.$pwd));

if(strlen($pwd) >= 1){
    $updatereferpoint = "UPDATE `users` SET `password`='$pwd',`cookie`='$newcookie' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
   if($runup){
    setcookie("login",$newcookie, time() - (86400 * 30), "/"); // 86400 = 1 day
    setcookie("login",$newcookie, time() + (86400 * 30), "/"); // 86400 = 1 day
   
   header("location:profile.php?pchange");
}
}


$ad =htmlspecialchars($_REQUEST["ad"]) ;


if(strlen($ad) >= 1){

    $updatereferpoint = "UPDATE `users` SET `address`='$ad' WHERE `email`='$email' ";
    $runup = mysqli_query($conn,$updatereferpoint);
    if($runup){
       header("location:profile.php?pchange");
    }


}






if($fname==null && $lname==null  && $country==null && $mobile==null  && $pwd==null  && $ad==null){
    header("location:pedit.php");
}









?>