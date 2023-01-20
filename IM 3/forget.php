<?php
include_once "header.php";

?>

        <br /><br /><br />

        

    

    <div class="container p-5" style="background-color:aliceblue;border-radius:35px">

<center> 
<h2 style="color:#3366FF">Recover Password Here</h2>
 <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #102693; height: 2px">
</center>



        <form action="forget_core.php" method="post">
        <div class="form-group"><br>
        <center>
         <input type="email" class="form-control" name="email" id="email" style="
         width:70%;color:black" aria-describedby="helpId" placeholder="enter your email"> 
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

if(isset($_REQUEST["noentry"])){

?>

<script>
  swal({
  title: "Warning !",
  text: "incorret Email !",
  icon: "error", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>












