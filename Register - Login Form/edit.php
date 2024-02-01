
<?php
$userId = $_GET['id'];
include_once 'Register - Login Form/userRepository.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Edit User</h3>
  <form action="" method="post">
       <input type="text" name="id" value="<?=$user['Id']?>" readonly>
  
      <label for="name">Name:</label>
      <input type="text" name="name" value="<?=$user['Name']?>">

      <label for="surname">Surname:</label>
      <input type="text" name="surname" value="<?=$user['Surname']?>">
  
      <label for="email">Email:</label>
      <input type="email" name="email" value="<?=$user['Email']?>">
  
      <label for="password">Password:</label>
      <input type="password"  name="password" value="<?=$user['Password']?>">
  
      <input type="submit" name = "EditButton" value="save">
    </form>
  </div>
</body>
</html>

<?php 

if(isset($_POST['EditButton'])){
    $id = $user['Id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userRepository->updateUser($id,$name,$surname,$email,$username,$password);
    header("location:dashboard.php");
}


?>