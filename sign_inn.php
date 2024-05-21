 <?php
session_start();

$error=$_SESSION['error'];
if( $error != true ){
    $_SESSION['error']="";
}
else{
    
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="icon" type="image" href="istockphoto-1171700662-640x640.jpg">
    <link rel="stylesheet" href="css/sign_in.css">
</head>
<body>
    <h1 id="name">Blood Management and Distribution System</h1>
    <div class="log">
        <form id="form" action="sign_in.php" method="post">
            <label for="login" id="sign">Sign In</label><br>
            <label for="username">Username</label><br>
            <input type="text"  id="username" name="user" required placeholder="Username or Email"><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="pass" required placeholder="Password"><br>
            <button type="submit" id="signin">Sign In</button><br>
            <!-- error -->
            <p>
              <?php
              // include "sign_in.php";
              $error=$_SESSION['error'];
               echo $error;
              if($error == true){
            $_SESSION['error']="";
              }
            
              ?>
            </p><br>

            <label for="forget" id="forget"><a href="forget.html"> Forget Password?</a></label>
            <hr><br>
            <label for="sign" id="signup"><a href="sign_up.php">Sign up</a></label>
            <label for="info" id="info">Signup to get access in Blood Management and Distribution System all information.</label>
            
        </form>
    </div>
    <footer>
        <div class="div1"><a  style="text-decoration: none; color: white;">Contact us<br><span><a href="https://www.google.com/gmail/about/" class="gmail"> bmds45@gmail.com</a></span><br>+977 9810000000</a><br>
          <a class="link" href="https://www.facebook.com/profile.php?id=100079188882330"><img src="facebook-logo-facebook-icon-free-free-vector.jpg" style="height: 40px; width: 40px; margin-left: -5%; border-radius: 50%;"> </a>
          <a class="link" href="https://www.instagram.com/accounts/login/"><img src="download.png" style="height: 40px; width: 40px; border-radius: 50%;
            background-color: white;"> </a> </div>
        <div class="div2" style="text-decoration: none; color:white; text-align: justify;">About us<span>
        <br>We are a web-based system that may help with blood information in emergency situations. With the aid of our system, 
        users can quickly learn about the types and quantities of blood available at blood banks.</span>
      </div>
        <div class="div3"></div>
      </footer>
</body>
</html>