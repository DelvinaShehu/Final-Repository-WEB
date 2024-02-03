<?php
include_once 'productsRepository.php';
include_once 'produktiKlasa.php';

if(isset($_POST['submit'])){
    if(empty($_POST['brand']) || empty($_POST['price'])  ||
    empty($_POST['model']) || empty($_POST['stock'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['brand'];
        $surname = $_POST['price'];
        $email = $_POST['model'];
        $username = $_POST['stock'];
        $id = $username.rand(100,999);

        $product  = new Product($id,$brand,$price,$model,$stock);
        $productRepository = new $productRepository();

        $productRepository->insertProduct($product);
    }
}

?>