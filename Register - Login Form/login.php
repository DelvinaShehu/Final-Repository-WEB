<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: products.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClearVue</title>
  <link rel="stylesheet" href="LogIn forma.css">
  
</head>
<body>
  <header class="header">

    <a href="logoja.png" class="logo">ClearVue</a>

    <nav class="navBar">

      <a class="home" href="optika.html">Home</a>
      <a class="home" href="AboutUs.html">About Us</a>
      <a class="home" href="products.html">Products</a>
      <a class="home" href="contact.html">Contact</a>
      <a class="home" href="LogIn forma.html">Log In</a>

    </nav>

  </header>
 
  <br>
  <br>
  
  <div class="RegisterPage">
    <form action="#" method="post" onsubmit="validateForm">

      <label for="name">Username:</label>
      <input type="text" id="username" name="username" required>
  
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
  
      <input type="submit" value="Log In">
    </form>
    <br>
    <p>Don't have an account? <a href="RegisterForm.html">Register here</a></p>
  </div>

  <script>
    function validateForm(){
      let username = document.getElementById('username').value;
      let password = document.getElementById('password').value;


      if(username.length < 8 && username.length > 15){
        alert('Username must be longer than 8 characters and shorter than 15 characters');
      }

      if(password.length < 6){
        alert('Password must be at least 6 charcters long');
        return false;
      }
    }

  </script>
  
</body>
</html>