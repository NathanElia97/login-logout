<!DOCTYPE html>

<html lang="en">

  <head>



    <title></title>

    <!-- Required meta tags -->

    <meta charset="utf-8" />

    <meta

      name="viewport"

      content="width=device-width, initial-scale=1, shrink-to-fit=no"

    />

    <link rel="icon" type="image/gif/png" href="img/header-logo.png" />

    
    <!-- Bootstrap CSS -->

    <link

      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"

      rel="stylesheet"

    />

    <link

      rel="stylesheet"

      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"

      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"

      crossorigin="anonymous"

    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

<style>
  ul li a {
    padding: 10px;
    text-align: right;
    text-decoration: none;
    color: white!important;
}
</style>
  </head>

  <body>

      

    

    <!--=====================================

            header starts here

    ======================================-->

    <div class="header header_2">
    <div class="header_row">
      <div class="container">
     
        <div class="row">

          <div class="col-md-3 mt-3">

          <div class="logo">
               <a href="index.php">
               LOGO
               </a>
               
            </div>

          </div>

          <div class="col-lg-9 mt-3 main_menu">

            <ul>

 

 




   

   




   






             

             

              

    

            

            <?php 

 if(isset($_COOKIE["login"])){

   echo   '<li class="user_log"><a  class="theme_btn_outline" href="profile.php"  class="regbtn">Profile</a></li>';

 }else{

   echo   '<li class="user_log"><a  class="theme_btn_outline" href="login.php">Login</a></li>';

 }

  

 

  ?>

 <?php 

 if(isset($_COOKIE["login"])){

   echo   '<li class="user_log"><a  class="theme_btn_outline" href="logout.php">Logout</a></li>';

 }else{

   echo   ' <li class="user_log"><a  class="theme_btn" href="register.php" class="regbtn">Register</a></li>';

 }

  

 

  ?>

    

 

 

 

 

 

 

 

 

            </ul>

          </div>

        </div>
</div>
</div>









