<?php
include_once("config.php");
if(isset($_COOKIE["login"])){
    $cookie = $_COOKIE["login"];
}else{
    header("location:login.php");
}


$imgname  =$_FILES["upload"]["name"];

if(strlen($imgname) >= 1){
  


$imgtempname  =$_FILES["upload"]["tmp_name"];

$imgupload = 'avatar/'.uniqid().'.jpg' ;

move_uploaded_file($imgtempname,$imgupload);



$updatereferpoint = "UPDATE `users` SET `avatar`='$imgupload ' WHERE `cookies`='$cookie' ";
$runup = mysqli_query($conn,$updatereferpoint);
if($runup){
   header("location:profile.php?imgchange");
}

}else{
    header("location:pedit.php");
}


?>