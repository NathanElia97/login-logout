<?php

session_start();
 $va = $_REQUEST["uval"];
 $ss = $_SESSION['uid'];
 $email =$_SESSION['email2'];


if($va==$ss){
    header("location:newpassword.php?email=$email");
}else{
     header("location:forget_sendemail.php");
}




?>