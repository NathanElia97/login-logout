<?php
session_start();
if(isset($_COOKIE["login"])){
    $cookie = $_COOKIE["login"];
    include_once("config.php");

    if(isset($_REQUEST["action"])){
       echo $action = $_REQUEST['action'];


        if(isset($_REQUEST["de"])){
           echo $action2 = $_REQUEST['de'];
        }

//user data 

        $selectQuery = "SELECT * FROM `users` WHERE `id`='$action';";
        $runsQ = mysqli_query($conn,$selectQuery);
        $rowcount=mysqli_num_rows($runsQ); 
        if ($rowcount==1) {
        while   ($alldatas = mysqli_fetch_array($runsQ )) {
        $id =$alldatas["id"];
        $pending_balance =$alldatas["Pending_balance"];
        $pending_tasks =$alldatas["Pending_tasks"];
        $blance =$alldatas["blance"];
        }
    }   
    
    


$workblace =  $_SESSION["wpb"] ;


$newpb = $pending_balance-$workblace;
$newpt =$pending_tasks-1;






$upq= "UPDATE `users` SET `Pending_balance`='$newpb',`Pending_tasks`='$newpt' WHERE `id`='$action' ";

$runup = mysqli_query($conn,$upq);

if($runup==true){
    
   $dl = "DELETE FROM `all_proof` WHERE `id`='$action2'";
   $runupss = mysqli_query($conn, $dl );
   if($runupss==true){
    header("location:see_proof.php");
   }


}











    }
    
}else{
    header("location:index.php");
}





?>