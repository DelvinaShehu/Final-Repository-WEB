<?php
  session_start();
  $hide="";
  if(!isset($_SESSION['username']))
    header("location:LogIn forma.php");
  else{
    if($_SESSION['role'] == "admin")
      $hide = "";
    else
      $hide = "hide";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClearVue</title>
  <link rel="stylesheet" href="AboutUs.css">
</head>
<body>
  <header class="header">

    <a href="logoja.png" class="logo">ClearVue</a>

    <nav class="navBar">

    <div class="<?php echo $hide?>">
      <div class="dropdown">
        <button class="dropbtn">Dashboard</button>
        <div class="dropdown-content">
          <a href="dashboard.php">Users</a>
          <a href="productsTable.php">Products</a>
          <a href="ContactTable.php">Contact</a>
        </div>
      </div>
   </div> 
      
      <a class="home" href="optika.php">Home</a>
      <a class="home" href="AboutUs.php">About Us</a>
      <a class="home" href="products.php">Products</a>
      <a class="home" href="contact.php">Contact</a>
      <a class="home" href="logout.php">Log Out</a>

    </nav>

  </header>

  <!------------------------------------------------>

  <div class="heading">
    <h1><em>About Us</em></h1>
    <p>
      Eyewear, the whispered poetry of vision, frames the world in strokes of individuality. 
      Crafted not merely to shield the eyes from the sun's gentle dance or the moon's contemplative glow, 
      but to cocoon perception in a tapestry of style and expression.
    </p>
  </div>

  <div class="container">
    <section class="about">
      <div class="about-image">
        <img src="Foto1.jpg" alt="">
      </div>
      <div class="about-content">
        <h2>Envision Elegance, See the Extraordinary: Where Frames Tell Your Story</h2>
        <p>From the classic allure of timeless designs to the avant-garde choreography of contemporary fashion,
           eyewear is a silent yet resounding echo of personal style. A ballet of lines and curves, it invites wearers
            to pirouette through the world, unveiling the ballet of life with each graceful movement. In the embrace of eyewear, 
            one finds not just a shield against the elements, but a canvas upon which the wearer paints their identity, a masterpiece in 
            the theater of existence.</p>
        <a href="" class="read-more">Read More</a>
      </div>
    </section>
  </div>
  <br>
  <br>
  <br>
  <hr>
<!-------------------------------------------->

<div class="heading2">
  <h1><em>Happy Costumers</em></h1>
  <p>
   <em>Let's see what our lovely clients have to say</em>
  </p>
</div>

  <div class="container2">
    <section class="reviews">
      <div class="reviews-content">
        <p>"I stumbled upon <a class="home" href="">ClearVue</a>, and I'm so glad I did! The selection of frames is incredible, and the staff is beyond helpful."</p>

        <br>
        <br>

        <p>"What a gem of a store! The moment I walked in, I felt welcomed. The staff is not only friendly but also incredibly knowledgeable 
          about their products. I appreciated the personalized attention and guidance in choosing the perfect glasses.
           A wonderful place for quality eyewear and top-notch service!"</p>

        <br>
        <br>

        <p>"I've never enjoyed shopping for glasses until I visited <a class="home" href="">ClearVue</a>. The range of frames is diverse, and the staff is so friendly
           and helpful. They made the process enjoyable and stress-free. I left with a pair of glasses that I absolutely love. Highly recommend this place!"</p>

        <br>
        <br>

        <p>"Five stars for <a class="home" href="">ClearVue</a>! The customer service is outstanding, and the variety of eyewear options is impressive."</p>
      </div>
      <div class="reviews-image">
        <img src="Foto2.png" alt="">
      </div>
    </section>
  </div>

  <br>
  <br>
  <br>
  <hr>
  <br>
  <br>
  <br>

  <!-------------------------------------------->

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
</body>
</html>
<?php
  }
?>