<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
  <title>Quick Groups</title>
</head>

<style>
  * {
  box-sizing: border-box;
}

body {
  font-family: "Inter", sans-serif;
  height: 100vh;
  background: hsl(0, 0%, 0%);
  box-sizing: border-box;
}

.product-section {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 120px 4%;
}

.product-grid {
  display: flex;
  grid-template-columns: 1fr;
  gap: 24px;
  width: 100%;
  max-width: 840px;
  margin: 0 auto;
  justify-items: center;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: start;
  position: relative;
  padding: 24px;
  background: #fff;
  border-radius: 0;
  width: 100%;
  max-width:345px;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.card-pill {
  position: absolute;
  padding: 6px 12px;
  border-radius: 0;
  color: #fff;
  background: #000;
  right: 0;
  top: 0;
  margin-right: 32px;
  margin-top: 32px;
  line-height: 1;
  font-size: 14px;
  font-weight: 700;
}

.card-img {
  display: block;
  width: 100%;
  /* max-height: 225px; */
  object-fit: contain;
  margin-bottom: 5px;
  aspect-ratio: 3/2;
  
}

.product-brand {
  font-size: 12px;
  line-height: 1;
  margin-top: 12px;
  margin-bottom: 0;
  color: #646464;
}

.product-cat {
  font-size: 12px;
  line-height: 1;
  margin-top: 12px;
  margin-bottom: 0;
  color: #646464;
  background: #f5f5f5;
  padding: 6px 12px;
  border-radius: 0;
}

.product-name {
  font-size: 1.7rem;
  line-height: 1;
  margin-bottom: 6px;
  margin-top: 0;
  color: #000;
}

.flex-row {
  display: flex;
  justify-content: start;
  align-items: center;
}

.space-between {
  justify-content: space-between;
}

.w-full {
  width: 100%;
}

.mb-sm {
  margin-bottom: 8px;
}

.price {
  margin-right: 12px;
}

.strike {
  text-decoration: line-through;
  opacity: 0.4;
}

.btn-col {
  width: 100%;
  margin-top: 24px;
}

.icon-link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  color: #fff;
  background: #000;
  padding: 1.4em 0;
  border-radius: 0;
  transition: background 0.3s ease;
  text-decoration: none;
  line-height: 1;
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.rubicons {
  width: 24px;
  margin-left: 8px;
  transition: transform 0.3s ease;
}

.icon-link:hover {
  background: #333;
}

.icon-link:hover > .rubicons {
  transform: translate(3px, -3px);
}

.hide {
  display: none;
}

@media screen and (min-width: 640px) {
  .product-grid {
    grid-template-columns: 1fr 1fr;
  }
}

/* loader */
     #preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    /* Preloader animation */
    .loader {
      border: 8px solid #ccc;
      border-top: 8px solid #333;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0);
      }
      100% {
        transform: rotate(360deg);
      }
    }


</style>



<body>


<div id="preloader">
    <!-- Preloader content -->
    <div class="loader"></div>
  </div>

  <header>
    <div class="company-logo">Quick Group</div>
    <nav class="navbar">
      <ul class="nav-items">
        <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link">OFFER</a></li> -->
        <li class="nav-item"><a href="#about" class="nav-link">ABOUT</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT US</a></li>
        <!-- <li class="nav-item"><a href="reg.php" class="nav-link">SIGNIN</a></li> -->
        
   
<?php 


if (isset($_SESSION['logged in'])) {
  echo '<li class="nav-item " id="logout"><a href="logout.php" class="nav-link">LOGOUT</a></li>';
} else {
  echo ' <li class="nav-item"><a href="reg.php" class="nav-link">SIGNIN</a></li>';
}
?>


    
      </ul>
    </nav>
    <div class="menu-toggle">
      <i class="bx bx-menu"></i>
      <i class="bx bx-x"></i>
    </div>
  </header>
  <main>
    <!-- HOME SECTION -->
    <section class=" section-1">
      <div class="slogan">
        <h1 class="company-title">QUICK GROUP OF COMPANIES</h1>
        <h2 class="company-slogan">
          The biggest printer service provider in the area where customers come first.
        </h2>
      </div>
      <div class="home-computer-container">
        <img class="home-computer" src="images/qcs-removebg-preview.png" alt="a computer in dark with shadow"
          class="home-img">
        <!-- <img class="home-computer" src="images/pngimg.com - printer_PNG101583.png" alt="a computer in dark with shadow" class="home-img"> -->
      </div>
    </section>





    <!-- about us -->


    <section class="about-section">
      <div class="container">
        <div class="row">
          <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
            <div class="inner-column">
              <div class="sec-title">
                <span id="about" class="title">About Company</span>
                <h2>We are leader in <br>Industrial market Since 1992</h2>
              </div>
              <div class="text">QUICK COPIER SOLUTIONS Part of Quick Group Of Companies (Pvt)Ltd. Document Management
                Industry Solutions provider may it be a Bulk Copying, Bulk Printing, Facility Management (Rental)
                solutions, Outright Sale of new or refurbished machines. QCS goal is to provide his customers with the
                optimal combination of high quality, cost savings, innovation, and support to enable them in their
                businesses to grow and prosper. We offers tailor made quality solutions to our Business Partners and our
                target is to make our customer business look more professional, efficient and transparent. QCS strives
                towards attaining the highest nationwide quality standards in all systems & processes.</div>
              <ul class="list-style-one">
                <li>Digital Printing Solutions</li>
                <li>Office Printing Solutions</li>
                <li>Manage Mail Printing Solutions</li>
              </ul>
              <div class="btn-box">
                <a href="#" class="theme-btn btn-style-one">Contact Us</a>
              </div>
            </div>
          </div>

          <!-- Image Column -->
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column wow fadeInLeft">
              <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                    src="images/print-centre-amended.jpg" alt=""></a></figure>
              <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img
                    src="images/vert.jpg" alt=""></a></figure>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- END about us -->
    <!-- products -->

<section class="product-section">
  <!-- <div class="product-grid">
    <div class="card">
      <div class="card-pill">
        Sale
      </div>
      <img class="card-img" src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/fxfibkkiiiky07goauq6/sb-nyjah-free-skate-shoe-oKwn7N.jpg" alt="product-image">
      <div class="flex-row space-between w-full mb-sm">
        <p class="product-brand">Nike SB</p>
        <p class="product-cat hide">Skateboarding</p>
      </div>
      <h1 class="product-name">Nyjah Free 2</h1>
      <div class="flex-row">
        <p class="price strike">$<span>94.95</span></p>
        <p class="price">$<span>79.95</span></p>
      </div>
      <div class="btn-col">
        <a href="#" class="icon-link">
          Purchase
          <svg fill="none" class="rubicons arrow-right-up" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M17.9645 12.9645l.071-7h-7.071" stroke-linecap="round"></path>
            <path d="M5.9645 17.9645l12-12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div> -->
    <?php 
   
include_once 'connection.php';


// Step 2: Query the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

echo  ' 
	<div class="product-grid">
    <div class="card">
      <div class="card-pill">
        Sale
      </div>
      <img class="card-img" src="'. $row['product_picture'] .'" alt="product-image">
      <div class="flex-row space-between w-full mb-sm">
        <p class="product-brand"> '. $row['product_name'] .'</p>
        <p class="product-cat hide">Skateboarding</p>
      </div>
      <h1 class="product-name">'. $row['product_brand'] .'</h1>
      <div class="flex-row">
        
        <p class="price">$<span> '. $row['price'] .'</span></p>
      </div>
      <div class="btn-col">
        <a href="#" class="icon-link">
          Purchase
          <svg fill="none" class="rubicons arrow-right-up" xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M17.9645 12.9645l.071-7h-7.071" stroke-linecap="round"></path>
            <path d="M5.9645 17.9645l12-12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>';
}

    ?>
   
    
</section>

    <!-- END products -->
    <!-- contact us -->

    <section class="contact-section">
      <div class="container">
        <div class="row clearfix">

          <!--Content Column-->
          <div class="content-column col-md-6 col-sm-12 col-xs-12">
            <div class="inner-column">
              <div class="sec-title">
                <div class="title">contact Us</div>
                <h2>We Are The Leader In <br> The Interiores</h2>
              </div>
              <div class="text">We are always available to answer your queries. Feel to drop us an e-mail or call us at
                given numbers so team of professional may assist you. We are keen to offer best of all services to your
                esteemed organization .</div>
              <div class="email">Email Us: <span class="theme_color">info@quickgroupco.com</span></div>
              <a href="/" class="theme-btn btn-style-three">Read More</a>
            </div>
          </div>

          <!--Image Column-->
          <div class="image-column col-md-6 col-sm-12 col-xs-12">
            <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="image">
                <img src="images/cover.png" alt="">
                <!-- <div class="overlay-box">
                  <div class="year-box"><span class="number">5</span>Years <br> Experience <br> Working</div>
                </div> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- END contact us -->
    <!-- Site footer -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Our Document Workflow Management related services provide clients with technology
              related solutions and services that increase their competitive advantage and ROI.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">Group Of Companies</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Office Printing Solutions</a></li>
              <li><a href="#">Manage Mail Printing Solutions</a></li>
              <li><a href="#">Digital Printing Solutions</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#about">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021-2022. All rights reserved.
              Design and Developed by <a href="http://printeir.com">Printier</a>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
   <script>
  $(document).ready(function() {
  // Show the preloader initially
  $('#preloader').show();

  // Delay the hiding of the preloader
  setTimeout(function() {
    $('#preloader').fadeOut('slow');
  }, 1500); // Delay in milliseconds (3 seconds)
});

  </script>
</body>

</html>