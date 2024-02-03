<?php

$userId = $_GET['id'];
include_once '../REPOSITORYYY/contactRepository.php';



$contactRepository = new ContactRepository();

$contactRepository->deleteContact($userId);

header("location:ContactTable.php");


?>