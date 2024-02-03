<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClearVue</title>
  <link rel="stylesheet" href="dashboard.css">
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
  <h2><em>Users:</em></h2>
  <br>
  <br>
  <hr>
  <a href="addUser.php" class="btn-primary">Add User</a>
  
  <table class="content-table" border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Username</th>
          <th>Password</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>

      <?php 
             include_once '../repository/userRepository.php';
             include_once '../Database Connection/databaseConnection.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[Id]</td>
                     <td>$user[Name]</td>
                     <td>$user[Surname] </td>
                     <td>$user[Email] </td>
                     <td>$user[Username] </td>
                     <td>$user[Password] </td>
                     <td><a href='edit.php?id=$user[Id]'>Edit</a> </td>
                     <td><a href='delete.php? id=$user[Id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
</html>