<?php

include_once("header.php");


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
$data_pwd= $alldata["password"];


$data_avatar= $alldata["avatar"];

$data_country = $alldata["country"];

}

}






?>












    <center>
      <h2 style="color: #3366ff">Edit Your Profile</h2>
      <hr
        class="mb-4 mt-0 d-inline-block mx-auto"
        style="width: 60px; background-color: #102693; height: 2px"
      />
    </center>

    <div class="container">
      <div class="main-body">
        <div class="row">
          
               
                
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <form action="pedit_core.php" method="Post">
            <div class="card">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">First Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" name="fname" placeholder="<?php echo $data_fname ?>" />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Last Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" name="lname" placeholder="<?php echo $data_lname ?>" />
                  </div>
                </div>
               
                
                
               
                
                
              
                
                
             
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Country</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                
                
                  <input type="text" class="form-control" name="country" placeholder="<?php echo $data_country ?>" />
                
                
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Confirm Password</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">

                  <input type="text" class="form-control" name="pwd" placeholder="<?php echo $data_pwd ?>" />
   



                  </div>
                </div>
               
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9 text-secondary">
                    <input
                      type="submit"
                      class="btn btn-primary px-4"
                      value="Save Changes"
                    />
                  </div>
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />

  </body>
</html>
