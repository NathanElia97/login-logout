<?php 

if(isset($_COOKIE["login"])){
 $npass = $_COOKIE["login"];
 
 
setcookie('login', '$npass', time() - 3600, '/'); 
header("location:index.php");

}
 ?>