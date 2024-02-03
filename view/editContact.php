
<?php
$userId = $_GET['id'];
include_once '../REPOSITORYYY/contactRepository.php';



$contactRepository = new ContactRepository();

$user  = $contactRepository->getContactById($userId);


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
        <input type="text" name="id"  value="<?=$user['Id']?>" readonly> <br> <br>
        <input type="text" name="username"  value="<?=$user['Username']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['Password']?>"> <br> <br>
        <input type="text" name="message"  value="<?=$user['Message']?>"> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['Id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $message = $_POST['message'];


    $contactRepository->updateContact($id,$username,$password,$message);
    header("location:ContactTable.php");
}


?>