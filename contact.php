<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>FACTORY PIXXEL | WEB DESIGNING AND DEVELOPMENT</title>
  <link rel="shortcut icon" href="images/favicon.png?v=1" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- AOS Animation CSS  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a data-aos="zoom-in" class="navbar-brand" href="index.php">
      <img src="images/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <div data-aos="zoom-in" class="img-btn">
            <a class="nav-link active hvr-buzz" href="index.php">
              <img src="images/t1.png" alt="t1.png">
              <span class="sr-only">(current)</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <div data-aos="zoom-in" class="img-btn">
            <a class="nav-link active hvr-buzz" href="wwr.php">
              <img src="images/t2.png" alt="t2.png">
            </a>
          </div>
        </li>
        <li class="nav-item">
          <div data-aos="zoom-in" class=" img-btn">
            <a class="nav-link active hvr-buzz" href="wwd.php">
              <img src="images/t3.png" alt="t3.png">
            </a>
          </div>
        </li>
        <li class="nav-item">
          <div data-aos="zoom-in" class=" img-btn">
            <a class="nav-link active hvr-buzz" href="services.php">
              <img src="images/t4.png" alt="t4.png">
            </a>
          </div>
        </li>
        <li class="nav-item">
          <div data-aos="zoom-in" class="img-btn">
            <a class="nav-link active hvr-buzz" href="contact.php">
              <img src="images/t5.png" alt="t5.png">
            </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <section>
    <div class="container-fluid" id="contact">
    <div class="row mt-3">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <p class="span text-center"> <span> CONTACT US !! </span> </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <p class="upper-content text-center mt-3"> Congratulations! You have landed safely on the land of Factory Pixxel.
          <br>It's a 'starting of Long Term Relationship with Factory Pixxel'.</p>
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
        <figure>
          <img src="images/iq.png" class="img-fluid">
        </figure>
      </div>

      <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
        <form class="form" method="POST" id="contactForm">
          <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
              <input class="textfield" type="text" name="name" placeholder="Enter your Name" required />
            </div>
          </div>

          <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
              <input class="textfield" type="Email" name="email" placeholder="Enter your E-mail Address" required />
            </div>
          </div>

          <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
              <input class="textfield" type="text" name="phone" placeholder="Enter your Contact number" required />
            </div>
          </div>

          <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
              <input class="textfield" type="text" name="message" id="message" cols="30" rows="7"
                placeholder="Enter your Message here" required />
            </div>
          </div>

          <div class="row my-5">
            <div class="input-wrp text-center">
              <button type="submit" name="button" class="btn btn-success btn-lg">SUBMIT</a></button>
            </div>
          </div>

          <div class="row mt-5">
            <div class="mt-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <p class="lower-content text-left"> Individually, we are one drop. Together,we are an ocean. <br>
                Let's work together and succeed together.</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php

if(isset($_POST['button']))
      {
          $nm = $_POST['name'];
          $em = $_POST['email'];
          $phn = $_POST['phone'];
          $mess = $_POST['message'];


            $sql="INSERT INTO enquiry(name,email,phone,message) values('$nm','$em','$phn','$mess')";
            $data=mysqli_query($conn,$sql);

            if($data)
            {
              ?>
  <script>
    alert("Data inserted successfully");
  </script>
  <?php 
            }
            else
            {
              ?>
  <script>
    alert("Data not inserted");
  </script>
  <?php
            }
      }

?>

</section>

<section>
    <!-- Footer -->
<div class="card">
  <img class="card-img-top" src="images/footer.png" alt="Card image cap">
</div>
<article id="footer" class="mt-4">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>BROWSE</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="wwr.html"><i class="fa fa-angle-double-right"></i>Who We Are ?</a></li>
          <li><a href=wwd.html><i class="fa fa-angle-double-right"></i>What we Do ?</a></li>
          <li><a href="services.html"><i class="fa fa-angle-double-right"></i>Services</a></li>
          <li><a href="contact.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>WRITE US</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="mail.php"><i class="fa fa-envelope"></i> info@factorypixxel.com </a></li>
          <br><br>
          <h5>CALL US</h5>
          <li><a href="#"><i class="fa fa-phone"></i> +91 8743 025 000 </a></li>
          <!-- <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Videos</a></li> -->
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>REACH US</h5>
        <p class="name text-light">Factory Pixxel</p>
        <p class="address text-light"> Web Designing & Development House <br> <br>BG 31, Ground Floor, Unitech Arcadia, <br> South
            City II, Sector – 49, Gurugram – 122018 (Haryana)</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="https://www.facebook.com/Factory-Pixxel-100242588637793/"><i class="fa fa-facebook"></i></a>
          </li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
          </li>
          <li class="list-inline-item"><a href="#"><i
                class="fa fa-google-plus"></i></a></li>
          <li class="list-inline-item"><a href="mail.php" target="_blank"><i
                class="fa fa-envelope"></i></a></li>
        </ul>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
        <!-- <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered
          MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p> -->
        <p class="h6">© All right Reversed. Developed & Designed by Factorypixxel.<a class="text-green ml-2" id="link" href="https://www.factorypixxel.com/"
            target="_blank">Factorypixxel</a></p>
        <div class="scrolltop float-right">
          <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
        </div>
      </div>
      <hr>
    </div>
  </div>
</article>
<!-- ./Footer -->
<script>
    mybutton = document.getElementById("myBtn");
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
 </section>
</body>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</html>