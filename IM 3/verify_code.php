<?php

session_start();
 $va = $_REQUEST["uval"];
   $ss = $_SESSION['uid'];



if($va==$ss){
    //header("signin_success.php?success");
    
    echo '<script> location.href="signin_success.php?success"; </script>';
}else{
     header("location:verify.php?error");
}




?>