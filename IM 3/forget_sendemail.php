<?php

session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>verify |  Post Micro</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/gif/png" href="img/header-logo.png" />
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://smtpjs.com/v3/smtp.js"></script>
      <style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: -webkit-linear-gradient(left, #3366ff, #00a5ff);
}
::selection{
  background: #fa4299;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #fc83bb;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
 background: -webkit-linear-gradient(left, #3366ff, #00a5ff);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}
    </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
              Verify Email
            </div>
         </div>
         <div class="form-container">
            <div class="form-inner">
               <form action="forget_key.php" method="Post" class="login">
                  <div class="field">
                     <input type="text" name="uval" id="cnf" placeholder="enter your code" required><br> 
                 
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Confirm" id="sub">
                  </div>
               </form>
               <br>
            </div>
         </div>
      </div>




      

<?php
      
  
use PHPMailer\PHPMailer\PHPMailer;


$code= rand();
$_SESSION['uid']=$code;

$ss=$_SESSION['email2'];
$name="hello";
$subject="verification code is";
    $body = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>email templete design</title>
</head>
<body>
<table
  cellpadding="0"
  cellspacing="0"
  border="0"
  width="650"
  height="20"
  align="center"
>
  <tr style="background-color: #009688">
    <td width="50%">
      <h2 style="margin-left: 10px; color: #fff" >
       LOGO
      </h2>
    </td>
    <td width="50%" align="center">
      <a href="" style="padding: 5px; text-decoration: none; color: #fff"
        >HOME</a
      >
      <a href="" style="padding: 5px; text-decoration: none; color: #fff"
        >ABOUT</a
      >
      <a href="" style="padding: 5px; text-decoration: none; color: #fff"
        >CONTACT US</a
      >
    </td>
  </tr>
</table>

<table
  cellpadding="0"
  cellspacing="0"
  border="0"
  width="650"
  height="500"
  align="center"
>
  <tr
    style="
      background: #000000;
      background-repeat: no-repeat;
      background-size: 100%;
    "
    align="center"
  >
    <td>
     
     
      <h2 style="color: #fff">Your Verification Code Is</h2>
      <h3
        style="
          color: white;
          background: rebeccapurple;
          width: 200px;
          padding: 10px;
        "
      >
        '.$code.'
      </h3>
    </td>
  </tr>
</table>

<table
  cellpadding="0"
  cellspacing="0"
  border="0"
  width="650"
  height="20"
  align="center"
>
  <tr style="background-color: #009688">
    <td align="center">
      <p style="color: #fff">&copy;2022 Copyright All Reserve</p>
    </td>
  </tr>
</table>
</body>
</html>
';

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "fiveerjoy@gmail.com";
    $mail->Password = 'uvfsqszszqaynymm';
    $mail->Port = 465; //587
    $mail->SMTPSecure = "ssl"; //tls

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom('fiveerjoy@gmail.com', $name);
    $mail->addAddress($ss);
    $mail->Subject = $subject;
    $mail->Body = $body;

    if ($mail->send()) {
        $status = "success";
        $response = "Email is sent!";

        header("location:verify_code.php");
    } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

    //exit(json_encode(array("status" => $status, "response" => $response)));



?>







   </body>
</html>





