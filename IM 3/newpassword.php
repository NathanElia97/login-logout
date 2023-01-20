<?php
session_start();
include_once "header.php";
?>


        <br /><br /><br />

       

  

    <div class="container p-5" style="background-color:aliceblue;border-radius:35px">

<center> 
<h2 style="color:#3366FF">Type Your New Password Here</h2>
 <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #102693; height: 2px">
</center>
<?php
 $email =$_SESSION['email2'];

?>


        <form action="newpass_core.php?email=<?php echo $email ;?>" method="POST">
        <div class="form-group"><br>
        <center>
         <input type="text" class="form-control" name="pwd" id="pwd" style="
         width:70%;color:black" aria-describedby="helpId" placeholder="new password"/> 

        </center>
        </div>

        




<center>
      <input type="submit"class="form-control" name="sub" id="sub"  style="background-color:#00A5FF;width:70%;color:white">
</center>
   </form>   
   <br><br>
   <p class="text-danger text-center"> You don't have an account?  <a href="register.php"> Create Account</a></p>
</form>

    </div>

    <br>

    <?php
    include_once('footer.php');
    ?>

<?php

if(isset($_REQUEST["password_error"])){

?>

<script>
  swal({
  title: "Warning !",
  text: "Password Not Match!",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>






<?php

if(isset($_REQUEST["normal_password"])){

?>

<script>
  swal({
  title: "Warning!",
  text: "your password should be at least 8 characters !",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>




<?php

if(isset($_REQUEST["length_password"])){

?>

<script>
  swal({
  title: "Warning!",
  text: "your password should be at lest 8 characters !",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>















