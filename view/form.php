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
    <form action="#" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
      <label>Brand:</label>
      <input type="text" name="brand" placeholder="Brand goes here..." required>

      <label>Price:</label>
      <input type="number" name="price" placeholder="Price goes here..." required>

      <label>Model:</label>
      <input type="text" name="model" placeholder="Model goes here..." required>

      <label>Stock Quantity:</label>
      <input type="number" name="stock" placeholder="Stock quantity goes here..." required>

      <label>Photo 1:</label>
      <input type="file" name="photo1" required>

      <label>Photo 2:</label>
      <input type="file" name="photo2" required>

      <button type="submit" name="submit">Add</button>
    </form>
  </div>
  
  <script>
    function validateForm() {
      var brand = document.getElementById("brand").value;
      var price = document.getElementById("price").value;
      var model = document.getElementById("model").value;
      var stock = document.getElementById("stock").value;
      var photo1 = document.getElementById("photo1").value;
      var photo2 = document.getElementById("photo2").value;

      if (brand === "" || price === "" || model === "" || stock === "" || photo1 === "" || photo2 === "") {
        alert("Please fill in all fields.");
        return false;
      }

      if (!/^[A-Z]/.test(brand)) {
        alert("Brand must start with a capital letter.");
        return false;
      }
      return true;
    }
  </script>
</body>
</html>