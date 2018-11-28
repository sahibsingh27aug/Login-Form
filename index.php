<?php
      if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
     echo "Your Name is: ".$username."<br> Your Password is: ".$password.'<br><br>';

     if($username == "admin" && $password == "admin"){
       echo "Authorized Access : Login Successfully";
     } else{
       echo "Unauthorize Access : Login Failed!";
     }
   }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="login-box">
      <img src="avatar.png" class="avatar">
        <h1>Login Here!</h1>

        <form action="index.php" method="post">
          <p>Username</p>
          <input type="text" name="username" placeholder="Enter Username">
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password">
          <input type="submit" name="submit" value="Login">
          <a href="#">Forget Password</a>
        </form>
    </div>
  </body>
</html>
