<?php
include 'Database Connection/databaseConnection.php';
  if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password = $_POST['password'];


  
}


echo '<script>
alert("Resgister or Log in to see the products")
</script>';
  /*if(isset($_POST['loginbtn'])){
      if(empty($_POST['username']) || empty($_POST['password'])){
        echo "Please fill the required fields!";
      }else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once '..\Users\users.php';


        foreach($users as $user){
          if($user['username'] == $username && $user['password'] == $password){
            session_start();

            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("location: products.php");
            exit();
          }
        }
      }
  }*/

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
  
<<<<<<< HEAD
      <input type="submit" name="submit" value="Log In">
=======
      <input type="submit" value="Log In" onclick="redirectToProducts()">
>>>>>>> 7902d45dca8c07f5822b8e98e5252f996ed6d5cf
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

  </script>
</body>
</html>