<?php
include_once("config.php");

$email=htmlspecialchars($_REQUEST["email"]);
$pass=htmlspecialchars($_REQUEST["pwd"]);

$npass=sha1(md5($email.$pass));

$selectQuery = "SELECT * FROM `users` WHERE `email`='$email' AND `password` ='$pass' ";
$runQ = mysqli_query($conn,$selectQuery);


if ($runQ == true) {

while ($alldata = mysqli_fetch_array($runQ )) {
   $data_email = $alldata["email"];
  $data_password = $alldata["password"];
  $status = $alldata["status"];

}

if($status==1){
      header("location:login.php?blocked");
      die();
}




  if($data_email=== $email && $data_password==$pass){
   
    setcookie("login",$npass, time() + (86400 * 30), "/"); // 86400 = 1 day
   header("location:profile.php");
 }else{
     header("location:login.php?error");
  }



}







?>