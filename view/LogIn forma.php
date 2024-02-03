<?php
include '../Database Connection/databaseConnection.php';
echo '<script>alert("Log in or Register to see the products") </script>';
  if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password = $_POST['password'];

    header("Location:../view/products.php");
  
}

if(isset($_POST['loginbtn'])){
  if(empty($_POST['username']) || empty($_POST['password'])){
    echo "Please fill the required fields!";
  }else{
      $username = $_POST['username'];
      $password = $_POST['password'];

      include_once 'users.php';
      $i=0;
      
      foreach($users as $user){
        if($user['username'] == $username && $user['password'] == $password){
          session_start();
    
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
          $_SESSION['role'] = $user['role'];
          $_SESSION['loginTime'] = date("H:i:s");
          header("location:products.php");
          exit();
        }else{
          $i++;
          if($i == sizeof($users)) {
            echo "Incorrect Username or Password!";
            exit();
          }
        }
      }
  }
}

      if ($_SESSION['role'] === 'admin'): ?>
          <a href="dashboard.php">Dashboard</a>
      <?php endif; 
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
  
  <div class="RegisterPage">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="validateForm">

      <label for="name">Username:</label>
      <input type="text" id="username" name="username" required>
  
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
  
      <input type="submit" value="Log In" name="login">
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