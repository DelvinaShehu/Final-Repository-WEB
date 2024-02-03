<?php
class ProduktiKlasa{
  private $id;
  private $brand;
  private $price;
  private $model;
  private $stock;

  function __construct($id,$brand,$price,$model,$stock){
    $this->$id = $id;
    $this->$brand = $brand;
    $this->$price = $price;
    $this->$model = $model;
    $this->$stock = $stock;
  }

  function getId(){
    return $this->$id;
  }

  function getBrand(){
    return $this->$brand;
  }

  function getPrice(){
    return $this->$price;
  }

  function getModel(){
    return $this->$model;
  }

  function getStock(){
    return $this->$stock;
  }
}
?>