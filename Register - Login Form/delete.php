<?php

$userId = $_GET['id'];
include_once '../Register - Login Form/userRepository.php';



$userRepository = new UserRepository();

$userRepository->deleteUser($userId);

header("location:dashboard.php");


?>