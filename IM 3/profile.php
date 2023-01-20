<?php

include_once "header.php";
?>
        <br /><br /><br />





        <?php

//select user query 
include_once("config.php");

if(isset($_COOKIE["login"])){
   $cookie = $_COOKIE["login"];
}else{
 header("location:index.php");
}


$selectQuery = "SELECT * FROM `users` WHERE `cookies`='$cookie' ";
$runsQ = mysqli_query($conn,$selectQuery);

if ($runsQ == true) {

while ($alldata = mysqli_fetch_array($runsQ )) {
$data_fname = $alldata["fname"];
$data_lname = $alldata["lname"];

$data_email= $alldata["email"];


$data_avatar= $alldata["avatar"];

$data_country = $alldata["country"];


$data_password = $alldata["password"];

}

}






?>





















        

    <div>
    <center> 
<h2 style="color:#3366FF">Your Profile
</h2>
 <hr
class="mb-4 mt-0 d-inline-block mx-auto"
style="width: 60px; background-color: #102693; height: 2px">
</center>
      <div class="container">
        <div class="main-body">
          <div class="row gutters-sm">
           

            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $data_fname ?></div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $data_lname ?></div>
                  </div>
                  <hr />
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $data_email ?></div>
                  </div>
                  <hr />
                  
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $data_password ?></div>
                  </div>
                  <hr />
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Country</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $data_country ?></div>
                  </div>
                  <hr />
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <a
                        class="btn btn-info"
                       
                        href="pedit.php"
                        >Edit</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>



<?php

if(isset($_REQUEST["pchange"])){

?>

<script>
  swal({
  title: "Good Job!",
  text: "Your Account Info Is Updated!",
  icon: "success", //note you can write here error or warning or inf
  button: "ok",
});
</script>


<?php     }  ?>