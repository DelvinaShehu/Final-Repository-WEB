<?php
session_start();
echo '<script>
alert("Resgister or Log in to see the products")
</script>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check login credentials (replace this with your actual login logic)
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Assuming login is successful
  if ($username === 'username' && $password === 'password') {
      // Set session variables (you should have your actual authentication logic here)
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
echo("hello");
      // Redirect to the products page
      header('Location: products.php');
      exit();
  } else {
      // Display an error message or handle unsuccessful login
      echo 'Invalid username or password';
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClearVue</title>
  <link rel="stylesheet" href="LogIn forma.css">
  <script>
        // JavaScript function to redirect to the products page
        function redirectToProducts() {
            window.location.href = 'products.php';
        }
    </script>
</head>
<body>
  <header class="header">

    <a href="logoja.png" class="logo">ClearVue</a>

    <nav class="navBar">

      <a class="home" href="optika.html">Home</a>
      <a class="home" href="AboutUs.html">About Us</a>
      <a class="home" href="products.php">Products</a>
      <a class="home" href="contact.html">Contact</a>
      <a class="home" href="login.php">Log In</a>

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
  
      <input type="submit" value="Log In" onclick="redirecttoProducts()">
    </form>
    <br>
    <p>Don't have an account? <a href="Register.php">Register here</a></p>
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

   
    function redirectToProducts() {
        window.location.href = 'products.php';
    }

  </script>
</body>
</html>