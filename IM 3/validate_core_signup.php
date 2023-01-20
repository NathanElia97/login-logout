<?php

session_start();

//get user from value  

$fname =htmlspecialchars($_REQUEST["fname"]);

$_SESSION['fname1'] = $fname ;


$lname =htmlspecialchars( $_REQUEST["lname"]);

 $_SESSION['lname1'] = $lname ;







$email =htmlspecialchars($_REQUEST["email"]) ;

 $_SESSION['email1'] = $email ;




$pwd =htmlspecialchars($_REQUEST["pwd"]) ;

$_SESSION['pwd1'] = $pwd ;
  

$cpwd =htmlspecialchars($_REQUEST["cpwd"]) ;

$_SESSION['cpwd1'] =$cpwd ;




$country =htmlspecialchars($_REQUEST["country"]) ;

$_SESSION['country'] =$country ;

//password =genarator

$newpass =sha1(md5($email.$pwd));

$_SESSION['password'] =$newpass ;







//from validation

if($pwd=="123456789" || $pwd=="12345678" || $pwd=="1234567" ){
    header("Location:register.php?normal_password"); 
    die;
}



 else if($fname==null || $lname==null || $country==null || $email==null || $pwd==null  ){
    header("Location:register.php?empty_field"); 
    die;
 }
 else if($pwd!=$cpwd){
    header("Location:register.php?password_error"); 
    die;
 }

 else if(strlen($pwd) <= 7){
    header("Location:register.php?length_password"); 
    die;
 }

else{


include_once("config.php");

    $selectQ = "SELECT * FROM `users` WHERE `email`= '$email' ";
    $runQ = mysqli_query($conn,$selectQ);
    
    if ($runQ == true) {
    
    while ($alldata = mysqli_fetch_array($runQ )) {
      $data_email = $alldata["email"];
      $data_name = $alldata["name"];
    
    }

    if($data_email==$email ){
        header("Location:register.php?email_error");
      
       }else{
         
   
        header("Location:verify.php");
       }



       }

    }
    
    














?>