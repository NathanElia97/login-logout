
    
    <?php include_once("header.php");?>


    <br />

    <div class="container p-5" style="background-color:aliceblue;border-radius:35px">

<center> 
<h2 style="color:#3366FF">Login</h2>
 <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #102693; height: 2px">
</center>

<div class="row">
    <div class="col-md-6">
        <form action="login_core.php" method="post">
        <div class="form-group">
         <label for="">Your Email *</label>
         <input type="email"class="form-control" name="email" id="email" aria-describedby="helpId" placeholder=""> 
        </div>
    </div>
    <br>
    <div class="col-md-6">
    <div class="form-group">
  <label for="">Your Password *</label>
  <input type="password"class="form-control" name="pwd" id="pwd" aria-describedby="helpId" placeholder=""> 
 </div>
    </div>
</div>
<p class="text-danger text-center"><a href="forget.php">Forgot Password.</a></p>
<center>
      <input type="submit"class="form-control" name="sub" id="sub" value="Login Now"  style="background-color:#00A5FF;width:70%;color:white">
</center>
   </form>   
   <br>
   <p class="text-danger text-center"> You don't have an account?  <a href="register.php"> Create Account</a></p>
</form>

    </div>

    <br>


<?php

if(isset($_REQUEST["signup_success"])){

?>

<script>
  swal({
  title: "your account is created successfully!",
  text: "now login here!",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>




<?php

if(isset($_REQUEST["pchange"])){

?>

<script>
  swal({
  title: "success!",
  text: "your password is changed successfully !",
  icon: "success", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>








<?php

if(isset($_REQUEST["error"])){

?>

<script>
  swal({
  title: "opps!",
  text: "your email and password not match !",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>


<?php

if(isset($_REQUEST["blocked"])){

?>

<script>
  swal({
  title: "Warning!",
  text: "your Account is Blocked !",
  icon: "warning", //note you can write here error or warning or info 
  button: "ok",
});
</script>


<?php     }  ?>

