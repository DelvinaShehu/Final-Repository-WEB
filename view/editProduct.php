<?php
$productId = $_GET['id'];
include_once 'productRepository.php';



$productRepository = new ProductRepository();

$product  = $productRepository->getProductById($productId);


?>
<!-- qitu e shkrun formen me html nmes-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    font-weight: bold;
    background-color: beige;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .product-form {
    width: 400px; 
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    flex-direction: column;
    align-items: center;
  }
  

  label {
    display: block;
    margin-bottom: 8px;
  }

  input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #963030;
    border-radius: 4px;
    font-size: 14px;
  }

  
  input[type="file"] {
    width: 100%;
    padding: 10px; 
    box-sizing: border-box;
    border: 1px solid #963030;
    border-radius: 4px;
    font-size: 14px;
    background-color: #fff; 
    cursor: pointer;
  }


  button {
    background-color: #922c2c;
    color: #fff;
    padding: 12px 20px ; 
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    
    
  }

  button:hover {
    background-color: #5f1919;
  }

</style>
<body>
  <div class="product-form">
    <form action="#" method="post" >
      <label>Id:</label>
      <input type="text" name="brand" placeholder="Brand goes here..." value="<?=$product['Id']?>" readonly>

      <label>Brand:</label>
      <input type="text" name="brand" placeholder="Brand goes here..."  value="<?=$product['brand']?>">

      <label>Price:</label>
      <input type="number" name="price" placeholder="Price goes here..." value="<?=$product['price']?>">

      <label>Model:</label>
      <input type="text" name="model" placeholder="Model goes here..." value="<?=$product['model']?>">

      <label>Stock Quantity:</label>
      <input type="number" name="stock" placeholder="Stock quantity goes here..." value="<?=$product['stock']?>">

      <button type="submit" name="submit" value="save">Add</button>
    </form>
  </div>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    $id = $product['Id'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $model = $_POST['model'];
    $stock = $_POST['stock'];


    $productRepository->updateContact($id,$brand,$price,$model,$stock);
    header("location:productsTable.php");
}


?>