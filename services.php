<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="Stylesheet.css">
  <link rel="stylesheet" href="./service-stylesheet.css">
  <link rel="stylesheet" href="./font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

  <title>Service Page</title>
</head>

<body>

  <!--navbar-->
  <nav class="navbar navbar-expand-lg pt-1">

    <!-- Navbar brand -->
    <div>
      <a class="navbar-brand" href="#">
        <img src="./images/logo_transparent.png" width="80px" alt="">
      </a>
    </div>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1">
      <span class="dark-blue-text">
        <i class="bi bi-menu-up" style="color: #fce181; background-color: #026670;"></i>
      </span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

      <!-- Links -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link" href="homepage.php">
            <i class="bi-house-fill"></i>
            Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productpage.php">
            <i class="bi-cart4"></i>
            Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">
            <i class="bi-gear-fill"></i>
            Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <i class="bi bi-person-video2"></i>
            <?php if(isset($_SESSION["user"])){
                            echo $_SESSION["user"];}
                            else{ echo "Profile";} ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi-person-circle"></i>
            <?php if(isset($_SESSION["user"])){
                            echo "Logout";}
                            else{ echo "Login";} ?></a>
        </li>
      </ul>
      <!-- Links -->

    </div>
    <!-- Collapsible content -->
  </nav>

  <!-- search box -->
  <div class="search-bar pb-2 pt-1">
    <div class="container-fluid">
      <div class="row height d-flex justify-content-end align-items-center">
        <div class="col-md-8">
          <div class="search"> <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="Have a question? Ask Now">
            <button class="btn btn-primary">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--coursal diagram-->
  <section>
    <div class="row service-intro row px-5 mx-lg-auto pt-3">
      <div class=" service-description col-lg-4 col-md-4 col-sm-12 ">
        <h1>Services</h1>
        <p> We offer a variety of services that students offer in the university-From comsetics to academic services.
          All this you can find in this page at affordable prices.
          Check out our profile and be one to offer such services. Students are provided with the oppurtunity to not
          only view services but to also provide such services. </p>

      </div>
      <div class="col-lg-8 col-md-8 px-5 crs-remove">
        <div id="carouselExampleCaptions" class="carousel slide  mx-lg-auto " data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
              aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
              aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
              aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
              aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
              aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8"
              aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9"
              aria-label="Slide 10"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./images/graduation-2.png" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Graduation is coming up guys!!</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/womans-day-2.jpg" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p class="title">Happy Womens day to all the ladies at Uniswa!!!.
                  Check the events planned out for this
                  day.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/water-day-2.jpg" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/sewing-2.jpg" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/make-up-2.jpg" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/party-2.png" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/nail-tech-2.png" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/fridays-2.png" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/tutoring-2.jpg" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/valentines.jpg" class="d-block w-100" alt="..." height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
    </div>
  </section>

  <!--service options-->

  <div class="service-section">
    <!--section dropdown-->
    <div class="dropdown pt-3 px-3">
      <button class="btn btn-light dropdown-toggle text-black-50" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        Services
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item text-black-50" href="eventspage.php">Events</a></li>
        <li><a class="dropdown-item text-black-50" href="hairdressing.php">Hair Dressing</a></li>
        <li><a class="dropdown-item text-black-50" href="nailtech.php">Nail Technician</a></li>
        <li><a class="dropdown-item text-black-50" href="tutoring.php">Tutoring</a></li>
        <li><a class="dropdown-item text-black-50" href="makeup.php">Make-Up</a></li>
        <li><a class="dropdown-item text-black-50" href="otherservices.php">Other Services</a></li>
      </ul>
    </div>

    <!--cards-->
    <div class="container">
      <div class=" px-4 py-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="./images/card-images/water-day.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Water Day</h5>
                <p class="card-text">Join in the festivities of this years world water day</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/womans-day.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Womens Day</h5>
                <p class="card-text">Join in the festivities of our annual Women's day celebration</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/nail-tech.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nail Tech</h5>
                <p class="card-text">Friendly and talented techs available for your nail needs</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/make-up.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Make up </h5>
                <p class="card-text">Talented artists readily available for your beauty needs</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/breast-c.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Breast Cancer Awareness</h5>
                <p class="card-text">Join in the movement of making everyone aware about breast cancer</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/pc-repair.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">PC Repair</h5>
                <p class="card-text">PC Issues? Rest assured we have professionals ready to provide reasonably priced solutions</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/make-up.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Make up</h5>
                <p class="card-text">Talented artists readily available for your beauty needs</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/tutoring.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tutoring</h5>
                <p class="card-text">Quality tutors available for your academic needs</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="./images/card-images/sewing.jpg" class="card-img-top shadow" alt="...">
              <div class="card-body">
                <h5 class="card-title">Tailor</h5>
                <p class="card-text">efficient tailors available for all your alteration and sewing requirements</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

 <!-- Footer -->
 <footer class="text-center text-lg-start text-muted" style="background-color:rgba(0, 0, 0, 0.05); ">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-justify text-md-start mt-2">
        <!-- Grid row -->
        <div class="row mt-1">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>E-MARKET
            </h6>
            <p>
              Peer-to-Peer trading made simpler and safer
            </p>
          </div>
          <!-- Grid column -->



          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="bi bi-house-fill me-3"></i> Matsapha,Kwaluseni</p>
              <p>
                <i class="bi bi-envelope-paper-fill me-3"></i>
                e-market@gmail.com
              </p>
              <p><i class="bi bi-telephone-forward-fill me-3"></i> +268 2505 3389</p>
              <p><i class="bi bi-telephone-forward-fill me-3"></i> +268 76053389</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color:rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>