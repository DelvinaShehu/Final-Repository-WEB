<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClearVue</title>
  <link rel="stylesheet" href="dashboard.css">
</head>

<body>

  <header class="header">

    <a href="logoja.png" class="logo">ClearVue</a>

    <nav class="navBar">

      <div class="dropdown">
        <button class="dropbtn">Dashboard</button>
        <div class="dropdown-content">
          <a href="dashboard.php">Users</a>
          <a href="productsTable.php">Products</a>
          <a href="ContactTable.php">Contact</a>
        </div>
      </div>

      <a class="home" href="optika.php">Home</a>
      <a class="home" href="AboutUs.php">About Us</a>
      <a class="home" href="products.php">Products</a>
      <a class="home" href="contact.php">Contact</a>
      <a class="home" href="logout.php">Log Out</a>

    </nav>

  </header>

  <br>
  <br>
  <h2><em>Products:</em></h2>
  <br>
  <br>
  <hr>
   
  <table class="content-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Brand</th>
          <th>Price</th>
          <th>Model</th>
          <th>Stock Quantity</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
    </table>
</body>
</html>