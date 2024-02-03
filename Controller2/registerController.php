<?php
include_once '../REPOSITORYYY/contactRepository.php';
include_once '../MODELSS/userContact.php';

if(isset($_POST['sendBtn'])){
    if(empty($_POST['Username']) || empty($_POST['Password'])
    || empty($_POST['Message'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $message = $_POST['Message'];
        $id = $username.rand(100,999);

        $user  = new UserContact($id,$username,$password,$message);
        $contactRepository = new ContactRepository();

        $contactRepository->insertContact($user);


    }
}



?>