

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClearVue</title>
  <link rel="stylesheet" href="addUser.css">
</head>

<body>

  <header class="header">

    <a href="logoja.png" class="logo">ClearVue</a>

    <nav class="navBar">

      <div class="dropdown">
        <button class="dropbtn">Dashboard</button>
        <div class="dropdown-content">
          <a href="dashboard.php">Users</a>
          <a href="productsTable.php">Products</a>
          <a href="ContactTable.php">Contact</a>
        </div>
      </div>
      
      <a class="home" href="optika.php">Home</a>
      <a class="home" href="AboutUs.php">About Us</a>
      <a class="home" href="products.php">Products</a>
      <a class="home" href="contact.php">Contact</a>
      <a class="home" href="Login forma.php">Log In</a>

    </nav>
    
</header>
<br>
<br>
<br>
<br>
<br>
    <div class="main-content">
        <div class="wrapper">
            <h2>Add User</h2>
        </div>
        <br>
<br>
<br>
<br>
<br>
    <form action="" method="POST">
        <table class = "addtable">
            <tr>
                <td>Name</td>
                <td><input type="text" name="Name" placeholder="Enter the name"></td>
            </tr>
            <tr>
            <td>Surname</td>
                <td><input type="text" name="Surname" placeholder="Enter the surname"></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" name="Email" placeholder="Enter the email"></td>
            </tr>
            <tr>
            <td>Username</td>
            <td><input type="text" name="Username" placeholder="Enter the username"></td>
            <tr>
            <td>Password</td>
            <td><input type="password" name="Password" placeholder="Enter the password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add User" class="addbutton">
                </td>
            </tr>
        </table>

    </form>
    </div>

</body>
</html>

<?php
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['submit'])){
    if(empty($_POST['Name']) || empty($_POST['Surname']) || empty($_POST['Email']) ||
    empty($_POST['Username']) || empty($_POST['Password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['Name'];
        $surname = $_POST['Surname'];
        $email = $_POST['Email'];
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $id = $username.rand(100,999);

        $user  = new User($id,$name,$surname,$email,$username,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}



?>
    

