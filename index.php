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
  <style>
    @font-face {
      font-family: rounded elegance;
      src: url(rounded_elegance.ttf);
    }

    @font-face {
      font-family: enigmatic demo;
      src: url(enigmatic_demo.otf);
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a data-aos="zoom-in" class="navbar-brand" href="index.php">
      <img src="images/logo.png" width="100" alt="logo">
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
            <a class="nav-link active hvr-buzz" href="wwr.html">
              <img src="images/t2.png" alt="t2.png">
            </a>
          </div>
        </li>
        <li class="nav-item">
          <div data-aos="zoom-in" class=" img-btn">
            <a class="nav-link active hvr-buzz" href="wwd.html">
              <img src="images/t3.png" alt="t3.png">
            </a>
          </div>
        </li>
        <li class="nav-item">
          <div data-aos="zoom-in" class=" img-btn">
            <a class="nav-link active hvr-buzz" href="services.html">
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
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\banner-1.jpg" alt="images\banner-1.jpg" />
        </div>
        <div class="carousel-item">
          <img src="images\banner-2.jpg" alt="images\banner-2.jpg" />
        </div>
        <div class="carousel-item">
          <img src="images\banner-3.jpg" alt="images\banner-3.jpg" />
        </div>
        <div class="carousel-item">
          <img src="images\banner-4.jpg" alt="images\banner-4.jpg" />
        </div>
        <div class="carousel-item">
          <img src="images\banner-5.jpg" alt="images\banner-5.jpg" />
        </div>
      </div>
    </div>
  </section>

  <section>
    <img src="images\web.png" alt="images\web.png" class="img-fluid" />
  </section>

  <section>
    <div class="container-fluid" id="about">
      <div class="span">
        <p class="text-center"><span class="hrline"> WHO WE ARE ? </span></p>
      </div>
      <div class="row">
        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
          <div class="content mt-5">
            <div class="content-overlay"></div>
            <img class="img-fluid" src="images/wd.jpg">
            <div class="heading" id="heading">
              <p class="text-center">Web Designing</p>
            </div>
            <div class="content-details fadeIn-left">
              <p> We are one of best professional website design company in Gurgaon in India. Create a website you're
                proud of.</p>
            </div>
          </div>
        </div>

        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 mt-5 d-flex justify-content-center">
          <p class="text-justify"><b>FACTORY PIXXEL,</b> sisterconcern of <b>COLOR DROP LET'S DESIGN N PRINT,</b>
            (is a graphic design and printing firm that has been in business for over 05 years. We have extensive
            experience in graphic design and printing, offering printing service for a wide range of print media)
            <b>are a professional website design firm based in Gurgaon, dedicated to professional service, quality
              web design & trustworthy results. With careful audience targeting, we create highly functional user
              interface with perfect texture and innovation foreach of ourclient.We provide complete Web Solutions
              and also consult & implement your entire
              Website Design, Development & Web Promotion strategy.</b>
          </p>
        </div>

        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
          <div class="content mt-5">
            <div class="content-overlay"></div>
            <img class="img-fluid" src="images/ga.jpg">
            <div class="heading" id="heading">
              <p class="text-center">Google Adwords/PPC</p>
            </div>
            <div class="content-details fadeIn-left">
              <p> Google Ads is Google's pay-per-click (PPC) advertising solution, which allows businesses and website
                owners bid on the chance to show an ads next to searches.</p>
            </div>
          </div>
        </div>

        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
          <div class="content mt-5">
            <div class="content-overlay"></div>
            <img class="img-fluid" src="images/dm.jpg">
            <div class="heading" id="heading">
              <p class="text-center">Digital Marketing/SEO</p>
            </div>
            <div class="content-details fadeIn-left">
              <p> SEO stands for “search engine optimization.” The better visibility your pages have in search results,
                the more likely you are to garner attention and attract prospective and existing customers to your
                business.</p>
            </div>
          </div>
        </div>

        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="img-fluid" src="images/wdt.jpg">
            <div class="heading" id="heading">
              <p class="text-center">Web Development</p>
            </div>
            <div class="content-details fadeIn-left">
              <p> Custom web development and website design services to cater to the needs of your target audience and
                target market. Be unique. This is where a content management system (CMS) comes into play.</p>
            </div>
          </div>
        </div>

        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 order-end d-flex align-items-center">
          <div class="button mb-5">
            <a href="contact.php"><img src="images/quote.png" alt="quote.png" class="img-fluid" id="picture"></a>
          </div>
        </div>

        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="img-fluid" src="images/sm.jpg">
            <div class="heading" id="heading">
              <p class="text-center">Social Media Marketing</p>
            </div>
            <div class="content-details fadeIn-left">
              <p> Factory Pixxel is the Best Web Hosting Company in Gurgaon providing secure & reliable Web Hosting
                Services in cheap &best prices.</p>
            </div>
          </div>
        </div>

        <div data-aos="zoom-in" class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
          <div class="content">
            <div class="content-overlay"></div>
            <img class="img-fluid" src="images/wh.jpg">
            <div class="heading" id="heading">
              <p class="text-center">Web Hosting</p>
            </div>
            <div class="content-details fadeIn-left">
              <p> Social media marketing provides companies with a way to engage with existing customers and reach new
                ones while allowing them to promote their desired culture, mission, or tone.</p>
            </div>
          </div>
        </div>

      </div>
  </section>

  <section>
    <img src="images\owp.png" alt="images\owp.png" class="img-fluid" />
  </section>

  <section>
    <div class="mt-5" id="wwd">
      <div class="span">
        <p data-aos="zoom-in" class="text-center"><span class="hrline"> WHAT WE DO ? </span></p>
      </div>
      <p data-aos="zoom-in" class="text-center mt-2 mb-5 lowerspan">
        AT FACTORYPIXXEL.COM , WE BELIEVE EVERYONE DESERVES TO HAVE A WEBSITE OR ONLINE STORE.
      </p>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col">
          <div class="row">
            <div data-aos="fade-right" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <p class="text-justify ptext mt-2 mx-5">
                Factory Pixxel works provides initial consultation, site cost estimate, sample page
                layouts, content
                creation, page creation, basic search engine optimization , site testing , site
                revisions, site launch
                (publishing) and on going site maintenance.<br><br>

                Additionally we update existing website and provide internet consulting service. A
                Unique, high quality
                website design attracts customers and helps you close sale by making your call to action
                and easy to
                locate. We build your brands credibility in the market to help your bussiness reach its
                maximum
                ability.
              </p>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <a href="" class="pe-auto hvr-grow">

                <img src="images\everyone.png" class="img-fluid" />

              </a>
            </div>
          </div>
        </div>
        <div data-aos="fade-left" class="col-xl-6 col-lg-6 col-md-6 col-sm-10 col-10">
          <div class="row d-flex align-item-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

              <img src="images\wwd.png" class="img-fluid" />

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div id="wfp">
      <div class="span">
        <p data-aos="zoom-in" class="text-center mt-3 pt-3" style="margin: 0px !important ;"><span class="hrline"> WHY
            FACTORY PIXXEL ? </span></p>
      </div>
      <p data-aos="zoom-in" class="text-center my-3 lowerspan">
        OUR JOB IS NOT JUST TO COMPLETE A PROJECT, WE ARE HERE FOR YOU TO HELP <br> YOU SHAPE AND REALISE YOUR VISION.
      </p>
      <div class="row d-flex align-item-center">
        <div data-aos="fade-left" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <img src="images\wfp.png" class="img-fluid mt-5" />
        </div>
        <div data-aos="fade-right" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="row d-flex align-item-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <p class="d-flex justify-content-center ptext text-light p-3 mt-5">
                Sole point web designing company providing complete web solutions, having a vast experience in web
                designing and development. Regardless the project size and complexity, we strive to provide our
                customers
                with great technology, differentiated products facilities and unmatched services delievered within a
                flexible and cost-efective business model that meets our customer's needs.<br>

                A versatile team of graphic designers, digital consultants, we designers & developers provide print
                production facilities for brochures, marketing collaterals, Business cards, Letterheads, Business
                forms,
                Newsletters, Brochures, Flyers, Posters, Books, Labels, Manuals, Calenders, Annual reports....
                etc.<br><br>

                Our goal is to achieve a visually impressive, interactive experience and deliver a marketable product
                which will motivate your audience to act and become paying customers.
              </p>
            </div>
          </div>
          <div class="row d-flex align-item-center p-3">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-inline">
                    <li class="list-inline-item text-light"> <i class="fa fa-check-square-o mr-2 text-warning">
                      </i>Custom web
                      development
                    </li>
                    <li class="list-inline-item text-light"> <i class="fa fa-check-square-o mr-2 text-warning">
                      </i>Website design
                      services
                    </li>
                    <li class="list-inline-item text-light"> <i class="fa fa-check-square-o mr-2 text-warning">
                      </i>Website integration
                      services</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-inline mt-2">
                    <li class="list-inline-item text-light"> <i class="fa fa-check-square-o mr-2 text-warning">
                      </i>Product development
                    </li>
                    <li class="list-inline-item text-light"> <i class="fa fa-check-square-o mr-2 text-warning">
                      </i>Corporate website
                      development</li>
                    <li class="list-inline-item text-light"> <i class="fa fa-check-square-o mr-2 text-warning"> </i>QA,
                      maintenance and
                      support</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid">
      <div class="mt-5 p-3" id="values">
        <div class="text-center" id="span">
          <p><span> OUR CORE VALUES :) </span></p>
        </div>
        <div class="row mt-5 d-flex justify-content-center">
          <div data-aos="fade-up" data-aos-duration="600" class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/value1.png">
            </div>
          </div>

          <div data-aos="fade-up" data-aos-duration="1200" class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/value2.png">
            </div>
          </div>

          <div data-aos="fade-up" data-aos-duration="1800" class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/value3.png">
            </div>
          </div>

          <div data-aos="fade-up" data-aos-duration="2400" class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/value4.png">
            </div>
          </div>

          <div data-aos="fade-up" data-aos-duration="3000" class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/value5.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid">
      <div class="mt-5" id="services">
        <div class="text text-center">
          <p><span id="span1"> OUR </span> <span id="span2"> SERVICES </span></p>
        </div>
        <div class="row mt-5">
          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s1.png">
            </div>
          </div>

          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s2.png">
            </div>
          </div>

          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s3.png">
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s4.png">
            </div>
          </div>

          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s5.png">
            </div>
          </div>

          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s6.png">
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s8.png">
            </div>
          </div>

          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s7.png">
            </div>
          </div>

          <div data-aos="zoom-in" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-2">
            <div class="image">
              <img class="img-fluid" src="images/s9.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="mt-5">
      <div class="search" id="search">
        <p class="text-center"> <span id="span1"> FREE </span> <span id="span2"> WEBSITE </span> <span id="span1">
            ANALYSIS </span> <span id="span1"> " UNHAPPY </span> <span id="span1"> WITH </span> <span id="span2">
            WEBSITE"</span>
        </p>
        <div class="row round-box d-flex justify-content-center p-5 mx-3">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row">
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-8 col" style=" margin-right: -30px !important;">
                <input class="form-control searchinput" type="text" placeholder="Website Domain...">
              </div>
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col">
                <button type="button" class="btn searchbtn bg-dark text-light">Analysis Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <p class="text-center" style="margin-bottom: 0px !important; ">Please share your website domain & we'll share
            the strategy</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\lwt.png" alt="images\lwt.png" />
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid" id="contact">
      <div class="row mt-3">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <p class="span text-center"> <span> CONTACT US !! </span> </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <p data-aos="zoom-in" class="upper-content text-center mt-3"> Congratulations! You have landed safely on the land of Factory
            Pixxel.
            <br>It's a 'starting of Long Term Relationship with Factory Pixxel'.
          </p>
        </div>
      </div>
      <div class="row d-flex justify-content-center mt-5">
        <div data-aos="fade-right" class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
            <img src="images/iq.png" class="img-fluid">
        </div>

        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
          <form class="form" method="POST" id="contactForm">
            <div data-aos="fade-left" data-aos-duration="750" class="row d-flex justify-content-center">
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
                <input class="textfield" type="text" name="name" placeholder="Enter your Name" required />
              </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="1500" class="row d-flex justify-content-center">
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
                <input class="textfield" type="Email" name="email" placeholder="Enter your E-mail Address" required />
              </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="2250" class="row d-flex justify-content-center">
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
                <input class="textfield" type="text" name="phone" placeholder="Enter your Contact number" required />
              </div>
            </div>

            <div data-aos="fade-left" data-aos-duration="3000" class="row d-flex justify-content-center">
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 input-wrp">
                <input class="textfield" type="text" name="message" id="message" cols="30" rows="7"
                  placeholder="Enter your Message here" required />
              </div>
            </div>

            <div class="row my-5 d-flex justify-content-center">
              <div class="input-wrp text-center">
                <button type="submit" name="button" class="btn btn-success btn-lg">SUBMIT</a></button>
              </div>
            </div>

            <div class="row mt-5">
              <div data-aos="zoom-in" class="mt-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="lower-content text-center"> Individually, we are one drop. Together,we are an ocean. <br>
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
    <div class="card">
      <div class="text-center" style="background-color: #1c6099; padding-left: 10%; padding-right: 10%;">
        <span id="span2"> ARE YOU READY </span>
        <span id="span1"> TO TAKE YOUR BUSINESS, TO THE NEXT LEVEL SO, WHEN WE JOIN HANDS, </span>
        <span id="span2"> YOUR BRAND BECOMES OURS </span>
      </div>
    </div>
    <article id="footer" class="mt-4">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>BROWSE</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
              <li><a href="wwr.html"><i class="fa fa-angle-double-right"></i>Who We Are ?</a></li>
              <li><a href="wwd.html"><i class="fa fa-angle-double-right"></i>What we Do ?</a></li>
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
            <p class="name text-light" id="name">Factory Pixxel</p>
            <p class="address text-light"> Web Designing & Development House <br> <br>BG 31, Ground Floor, Unitech
              Arcadia, <br> South
              City II, Sector – 49, Gurugram – 122018 (Haryana)</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
              <li class="list-inline-item"><a href="https://www.facebook.com/Factory-Pixxel-100242588637793/"><i
                    class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a href="mail.php" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
            <!-- <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered
          MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p> -->
            <p class="h6">© All right Reversed. Developed & Designed by Factorypixxel.<a class="text-green ml-2" id="link" href="https://www.factorypixxel.com/" target="_blank">Factorypixxel</a></p>
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