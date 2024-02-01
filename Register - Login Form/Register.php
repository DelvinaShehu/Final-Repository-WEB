<?php
session_start();

if (isset($_SESSION['name'])) {
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

      <a class="home" href="optika.html">Home</a>
      <a class="home" href="aboutUs.php">About Us</a>
      <a class="home" href="products.php">Products</a>
      <a class="home" href="">Contact</a>
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

      <label for="dateOfBirth">Date of Birth:</label>
      <input type="date" id="dateOfBirth" name="dateOfBirth" required>
  
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
  
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
  
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
  
      <input type="submit" name = "registerBtn" value="Register">
    </form>
  </div>

  <script>
    function validateForm(){
      let name = document.getElementById('name').value;
      let surname = document.getElementById('surname').value;
      let email = document.getElementById('email').value;
      let password = document.getElementById('password').value;
      let confirmPassword = document.getElementById('confirmPassword').value;

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

      if(password.length < 6){
        alert('Password must be at least 6 charcters long');
        return false;
      }

      if(password !== confirmPassword){
        alert('Passwords do not match');
        return false;
      }

      ///////////Validate Date of Birth:

      var dateRegex = /^\d{4}-\d{2}-\d{2}$/;

      if (!dateRegex.test(dateOfBirth)) {
        alert('Please enter a valid date of birth in YYYY-MM-DD format.');
        return false;
      }
      return true; 
    }
  </script>
  <?php include_once '../Register - Login Form/registerController.php';
  ?>

</body>
</html>
