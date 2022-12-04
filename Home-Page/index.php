<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-------NavBar------>

    <nav class="navbar navbar-expand-md header fixed-top">
      <div class="container">
        <a class="navbar-brand fs-2" id="logo" href="#"><b>DCMS</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ms-auto btn fs-5 register border-0">
              <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
              <li class="nav-item"><a href="#reviews" class="nav-link">Reviews</a></li>
              <li class="nav-item"><a href="#faq" class="nav-link">FAQ</a></li>
              <li class="nav-item"><a href="log.php" class="nav-link"  data-bs-target="">Sign in</a></li>  
            </ul>
        </div>
      </div>
    </nav>

    <!--<div id="logindemo" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body">
                  <h5 class="welcome-text text-center">WELCOME BACK</h5>
                  <div class="welcome-form text-center">
                    <input type="text" placeholder="Username" class="form-control"><br/>
                    <input type="text" placeholder="Password"  class="form-control">
                    <button type="button" class="btn btn-primary sign-in rounded-pill">Sign in</button>
                    <h6>Don't have an account?<button type="button" class="btn register border-0" data-bs-toggle="modal" data-bs-target="#register"><span><a href="reg.html">Register</a></span></button></h6>
                  </div>
              </div>
          </div>
      </div>-->
  </div>
  </div> 

    <!----------Hero section-------->

	<section class="hero" id="hero">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="hero-text">
              <h3>Professional <span>Cleaning</span> </h3>
              <h1>Service For Your Home</h1>
              <p>Lorem ipsum Aute magna nulla labore dolore laborum ex mollit labore ipsum exercitation commodo est sit.
              Enim sit dolor et qui esse officia duis do amet in cillum.Lorem ipsum is do amet in cillum.</p>

              <a href="log.php" class="btn hero-btn" id="gg">Book Now</a>
            </div> 
          </div>
            
          <div class="col-lg-6">
            <img src="img/Clean Man.png" class="hero-img" alt="">
          </div>
        </div>

      </div>
    </section>

    <!------------Service------------>

    <section class="service" id="service">
      <h2 class="service-topic text-center"><b>Services</b></h2>
      <div class="container">
        <div class="service-text">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <h4 class="card-topic text-center"><b>Green Cleaning</b></h4>
              <div class="card">
                <img src="img/Grasscutman.jpg" class="card-img-top" alt="" >
                <div class="card-body">
                  <h4 class="card-title text-center">Including</h4>
                  <p class="card-text">
                    <ul>
                      <li>tree cutter</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <h4 class="card-topic text-center"><b>Residential Cleaning</b></h4>
              <div class="card">
                <img src="img/House cleaning.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h4 class="card-title text-center">Including</h4>
                  <p class="card-text">
                    Lorem ipsum Aute magna nulla labore dolore laborum ex mollit labore ipsum exercitation commodo est sit.Enim sit doloret qui esse officia duis do amet 
                    in cillum.Lorem ipm.
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <h4 class="card-topic text-center"><b>Outdoor Cleaning</b></h4>
              <div class="card">
                <img src="img/roof.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h4 class="card-title text-center">Including</h4>
                  <p class="card-text">
                    Lorem ipsum Aute magna nulla labore dolore laborum ex mollit labore ipsum exercitation commodo est sit.Enim sit doloret qui esse officia duis do amet 
                    in cillum.Lorem ipm..</p>
                </div>
              </div>
            </div>
            <div class="col">
              <h4 class="card-topic text-center"><b>Special Task</b></h4>
              <div class="card">
                <img src="img/Partyseen.jpg" class="card-img-top" alt="" >
                <div class="card-body">
                  <h4 class="card-title text-center">Including</h4>
                  <p class="card-text">
                    Lorem ipsum Aute magna nulla labore dolore laborum ex mollit labore ipsum exercitation commodo est sit.Enim sit doloret qui esse officia duis do amet 
                    in cillum.Lorem ipm.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>


    <!---------------Reviews------------->
    <section class="reviews" id="reviews">
        <h2 class="reviews-topic text-center"><b>Reviews</b></h2>
        <div class="container-fluid">
      <div class="reviews-area">
        
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="content text-center">
                <h5 class="carousel-topic">WHAT USERS SAYS</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit reiciendis necessitatibus laborum numquam consequuntur possimus magnam expedita ipsam illum voluptatem quia assumenda placeat, at asperiores vitae obcaecati. Reprehenderit nesciunt voluptatem excepturi, libero ipsum tempora perspiciatis."</p>
                <div class="person"><img alt="" src="img/image (1).jpg" class=" rounded-circle shadow-1-strong mb-4" style="width: 150px;"></div>
                <h5 class="name">David Jones</h5>
                <h6>Kandy</h6>
              </div>
            </div>
            <div class="carousel-item">
              <div class="content text-center">
                <h5 class="carousel-topic">WHAT USERS SAYS</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit reiciendis necessitatibus laborum numquam consequuntur possimus magnam expedita ipsam illum voluptatem quia assumenda placeat, at asperiores vitae obcaecati. Reprehenderit nesciunt voluptatem excepturi, libero ipsum tempora perspiciatis."</p>
                <div class="person"><img alt="" src="img/image.jpg" class=" rounded-circle shadow-1-strong mb-4" style="width: 150px;"></div>
                <h5 class="name">David Jones</h5>
                <h6>Kandy</h6>
              </div>
            </div>
            <div class="carousel-item">
              <div class="content text-center">
                <h5 class="carousel-topic">WHAT USERS SAYS</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit reiciendis necessitatibus laborum numquam consequuntur possimus magnam expedita ipsam illum voluptatem quia assumenda placeat, at asperiores vitae obcaecati. Reprehenderit nesciunt voluptatem excepturi, libero ipsum tempora perspiciatis."</p>
                <div class="person"><img alt="" src="img/image (2).jpg" class=" rounded-circle shadow-1-strong mb-4" style="width: 150px;"></div>
                <h5 class="name">David Jones</h5>
                <h6>Kandy</h6>
              </div>
            </div>
          </div>
          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div> 
      </div>   
    </section>
    

    <!---------FAQ- Accordion------>
  <section class="faq" id="faq">
    <div class="container col-sm-8">
      <h3 class="text-center"><b>FAQ</b></h3>
      <div class="accordion" id="accordionSection">
          <div class="accordion-item mb-3">
              <h2 class="accordion-header">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Should I have pay for transport ?</button></h2>
              <div class="accordion-collapse collapse" id="collapseOne" data-bs-parent="#accordionSection">
                  <div class="accordion-body">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>
              </div>
          </div>
          <div class="accordion-item  mb-3">
              <h2 class="accordion-header">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">item 2</button></h2>
              <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionSection">
                  <div class="accordion-body">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>
              </div>
          </div>
          <div class="accordion-item mb-3">
              <h2 class="accordion-header">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Item 3</button></h2>
              <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionSection">
                  <div class="accordion-body">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </div>
              </div>
          </div>
          <div class="accordion-item mb-3">
            <h2 class="accordion-header">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefour">Item 4</button></h2>
            <div class="accordion-collapse collapse" id="collapsefour" data-bs-parent="#accordionSection">
                <div class="accordion-body">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
            </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefive">Item 5</button></h2>
          <div class="accordion-collapse collapse" id="collapsefive" data-bs-parent="#accordionSection">
              <div class="accordion-body">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
    

  <!--------Footer-------->

  <div class="footer">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>ABOUT US</h5>
            <p>Lorem ipsum Aute magna 
              nulla labore dolore laborum ex 
              mollit labore ipsum exercitation 
              commodo est sit.Enim sit dolor
               et qui esse officia duis do amet 
              in cillum.Lorem ipm.</p>
          </div>
          <div class="col-md-3">
            <h5 class="sitemap">SITEMAP</h5>
            <ul class="icon">
              <li><p class="bi-chevron-right">Home</p></li>
              <li><p class="bi-chevron-right">Service</p></li>
              <li><p class="bi-chevron-right">Reviews</p></li>
              <li><p class="bi-chevron-right">FAQ</p></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Email</h5>
            <p>dcsms@service.lk</p>
            <h5>TELEPHONE</h5>
            <p>+982929030</p>
          </div>
          <div class="col-md-3">
            <h5>SOCIAL MEDIA</h5>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-linkedin"></i>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>