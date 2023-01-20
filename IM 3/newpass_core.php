
<?php 
session_start();

include_once("config.php");

if(isset($_REQUEST["email"])){
   $semail=$_REQUEST["email"];
}


  $pwd =$_REQUEST["pwd"];



 $npass = sha1(md5($semail.$pwd));




//from validation
if($pwd=="123456789" || $pwd=="12345678" || $pwd=="1234567" ){
    header("Location:register.php?normal_password"); 
    die;
}



 else if($pwd==null){
    header("Location:newpassword.php?empty_field"); 
    die;
 }
 else if(strlen($pwd) <= 7){
    header("Location:newpassword.php?length_password"); 
    die;
 }

else{


$update = "UPDATE `users` SET `password`='$pwd',`cookies`='$npass' WHERE `email`='$semail' ";
$runQ = mysqli_query($conn,$update);


if ($runQ == true) {

   echo '<script> location.href="login.php?pchange"; </script>';
}


}



 ?>

