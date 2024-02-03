<<<<<<< HEAD
=======
<?php
if (isset($_POST['registerBtn'])) {
    if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])) {
        echo '<script>alert("Please fill out all the required fields!");</script>';
    } else {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once 'users.php';
        include_once 'databaseConnection.php';

        $i = 0;
        $userExists = false;

        foreach ($users as $user) {
            if ($user['name'] == $name && $user['surname'] == $surname &&
                $user['email'] == $email && $user['username'] == $username
                && $user['password'] == $password
            ) {
                $userExists = true;
                break;
            }
            $i++;
        }

        if (!$userExists) {

            $newUser = [
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'role' => 'user'
            ];

            $users[] = $newUser;

            session_start();

            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = 'user';
            $_SESSION['loginTime'] = date("H:i:s");

            echo '<script>alert("User has been registered successfully!");</script>';

            header("location: optika.php");

            exit();
        } else {
            echo '<script>alert("User already exists");</script>';
            exit();
        }
    }
}
?>
>>>>>>> d6167f6c9afb655dc70894fc57c284f4334650da
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClearVue</title>
  <link rel="stylesheet" href="RegisterForm.css">
</head>
<body>
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
