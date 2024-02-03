<?php
include_once 'databaseConnection.php';

class productRepository{

  private $connection;

  function __construct(){
    $conn = new DatabaseConenction;
    $this->connection = $conn->startConnection();
  }

  function insertProduct($product){

    $conn = $this->connection;

    $id = $product->getId();
    $brand = $product->getBrand();
    $price = $product->getPrice();
    $model = $product->getModel();
    $stock = $product->getStock();

    $sql = "INSERT INTO products (id,brand,price,model,stock) VALUES (?,?,?,?,?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$id,$brand,$price,$model,$stock]);

    echo "<script> alert('Product has been inserted successfuly!'); </script>";
  }

  function getAllProducts(){
    $conn = $this->connection;

    $sql = "SELECT * FROM products";

    $statement = $conn->query($sql);
    $products = $statement->fetchAll();

    return $products;
  }

  function getProductById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM products WHERE id='$id'";

    $statement = $conn->query($sql);
    $product = $statement->fetch();

    return $product;
  }

  function updateProduct($id,$brand,$price,$model,$stock){
    $conn = $this->connection;

    $sql = "UPDATE products SET brand=?, price=?, model=?, stock=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$brand,$price,$model,$stock,$id]);

    echo "<script>alert('Update was successful'); </script>";
  } 

  function deleteProduct($id){
    $conn = $this->connection;

    $sql = "DELETE FROM products WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('Delete was successful'); </script>";
  } 
}
?>