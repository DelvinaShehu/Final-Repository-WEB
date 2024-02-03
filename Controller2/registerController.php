<?php
include_once '../REPOSITORYYY/contactRepository.php';
include_once '../MODELSS/userContact.php';

if(isset($_POST['sendBtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])
    || empty($_POST['message'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = $_POST['message'];
        $id = $username.rand(100,999);

        $user  = new UserContact($id,$username,$password,$message);
        $contactRepository = new ContactRepository();

        $contactRepository->insertContact($user);


    }
}



?>