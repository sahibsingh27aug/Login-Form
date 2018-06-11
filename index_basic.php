<?php
  if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      echo "Your Name is: ".$username."<br> Your Password is: ".$password.'<br><br>';
      // select * from users where username=$username and password=$password
      /*
      if($username == "admin" && $password == "admin123"){
        echo "Authorized Access : Login Successfully";
      } else{
        echo "Unauthorize Access : Login Failed!";
      }
      */

    }


 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
  </head>
  <body>
      <form action="index.php" method="post">
        <b>Username</b><br>
        <input type="text" name="username"><br><br>
        <b>Password</b><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
      </form>
  </body>
</html>

<?php

 ?>
