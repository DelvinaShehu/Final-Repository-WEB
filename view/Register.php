<?php
session_start();

if (isset($_SESSION['name']) && ($_SESSION['surname']) && 
    ($_SESSION['email']) && ($_SESSION['username']) && ($_SESSION['password'])) {
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
  <link rel="stylesheet" href="RegisterForm.css">
</head>
<body>
  <header class="header">

    <a href="logoja.png" class="logo">ClearVue</a>

    <nav class="navBar">

      <a class="home" href="optika.php">Home</a>
      <a class="home" href="AboutUs.php">About Us</a>
      <a class="home" href="products.php">Products</a>
      <a class="home" href="contact.php">Contact</a>
      <a class="home" href="login.php">Log In</a>

    </nav>

  </header>
  
  <br>
  <br>
  

  <div class="RegisterPage">
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="surname">Surname:</label>
      <input type="text" id="surname" name="surname" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>


      <label for="Username">Username:</label>
      <input type="text" id="Username" name="username" required>
  
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
  
      <input type="submit" name = "registerBtn" value="Register">
    </form>
  </div>

  <script>
    function validateForm(){
      let name = document.getElementById('name').value;
      let surname = document.getElementById('surname').value;
      let email = document.getElementById('email').value;
      let username = document.getElementById('username').value;
      let password = document.getElementById('password').value;
      
      

      let nameRegex = /^[a-zA-Z\s]+$/;
      if(!nameRegex.test(name)){
        alert('Please enter a valid name.');
        return false;
      }

      let surnameRegex = /^[a-zA-Z\s]+$/;
      if(!nameRegex.test(surname)){
        alert('Please enter a valid surname.');
        return false;
      }


      let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if(!emailRegex.test(email)){
        alert('Please enter a valid email address');
        return false;
      }
      let usernameRegex = /^[a-zA-Z\s]+$/;
      if(!nameRegex.test(username)){
        alert('Please enter a valid surname.');
        return false;
      }
      if(password.length < 6){
        alert('Password must be at least 6 charcters long');
        return false;
      }

    }
  
  </script>

  <?php
  include_once '../controller/registerController.php';
  ?>
</body>
</html>
