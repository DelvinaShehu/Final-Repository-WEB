<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>ClearVue</title>
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
<br>
<br>
<main class="container">
    <div class="contact-box">
      <section class="left-section">
        <h2>Contact Us</h2>
        <br>
        <br>
        <p>Contact us for an exclusive eyewear experience that blends elegance with functionality.</p>
        <br>
        <p>Feel free to reach out for any inquiries or assistance.</p>
        <br>
        <br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <input type="text"  name="Username"  id = "Username "placeholder="Enter your username" required>
          <br>
          <input type="text" name="Password" id = "Password" placeholder="Enter your password" required>
          <br>
          <textarea placeholder="Your message..." name= "Message "rows="4" id="Message" required></textarea>
          <input type="submit" name = "sendBtn" value="Send" id="sendBtn">
        </form>
        <br>
        <br>
        <br>
        <br>
        <div class="contact-details">
            <h3>Find Us</h3>
            <br>
            <br>
            <p>Phone: +1 234 5678</p>
            <br>
            <p>Location: 10 Rue de l'École, Paris, France</p>
            <br>
            <br>
            <br>
            <br>
            <div class="social-links">
              <p> Find Us On Social Media</p>
              <br>
                <a href="#" class="social-icon">
                <img src="facebook.png" alt="Facebook">
              </a>
              <a href="#" class="social-icon">
                <img src="instagram.png" alt="Instagram">
              </a>
              <a href="#" class="social-icon">
                <img src="twitter.png" alt="Twitter">
              </a>
              <a href="#" class="social-icon">
                <img src="pinterest.png" alt="Twitter">
              </a>
            </div>
    
    
    
    </section>

      <section class="right-section">
        <div class="eyewear-photo">
          <img src="backu.jpg" alt="Eyewear Brand">
        </div>
          </div>
      </section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
    <div class="f">
        <h2>About ClearVue Optics</h2>
        <h2>Our Links</h2>
        <div class="ff">
            <a href=""><img src="instagram.png" alt="" style height="50px", width="50px"></a>
            <a href=""><img src="twitter.png" alt="" style height="70px", width="70px"></a>
            <a href=""><img src="facebook.png" alt="" style height="50px", width="50px"></a>
            <a href=""><img src="pinterest.png" alt="" style height="50px", width="50px"></a>
        </div>
    </div>
    <div class="footermain">
        <div class="footerleft">
            <p>From designer frames to cutting-edge lenses, we're your destination for fashionable eyewear and precise vision solutions.</p>
        </div>
        <div class="footercenter">
            <p>Advertise</p>
            <p>Support</p>
            <p>Our Company</p>
            <p>Contact</p>
        </div>
        <div class="footerright">
            <p>Terms of use</p>
            <p>Privacy Policy</p>
        </div>
    </div>
    <div class="fundi">
        <p>Copyright 2020 ClearVue Optics. All rights reserved.</p>
    </div>
  </footer>
  <br>
  <br>
  <br>
  <br>

  
  <script>
    function validateForm(){
      let username = document.getElementById('username').value;
      let password = document.getElementById('password').value;


      if(username.length < 8 && username.length > 15){
        alert('Username must be longer than 8 characters and shorter than 15 characters');
      }

      if(password.length < 6){
        alert('Password must be at least 6 charcters long');
        return false;
      }
    }

  </script>
 <?php include_once '../Controller2/registerController.php';?>

</body>
</html>