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
      <a class="home" href="LogIn forma.php">Log In</a>

    </nav>

  </header>

  <br>
  <br>
  <h2><em>Contact Us:</em></h2>
  <br>
  <br>
  <hr>
   
  <table class="content-table" border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Password</th>
          <th>Message</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <?php 
             include_once '../REPOSITORYYY/contactRepository.php';

             $contactRepository = new ContactRepository();

             $users = $contactRepository->getAllContacts();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[Id]</td>
                     <td>$user[Username] </td>
                     <td>$user[Password] </td>
                     <td>$user[Message] </td>
                     <td><a href='editContact.php?id=$user[Id]'>Edit</a> </td>
                     <td><a href='deleteContact.php? id=$user[Id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
   
</body>
</html>