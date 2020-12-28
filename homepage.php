<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Warehouse Management</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style1.css" />
  </head>
  <body>
    <main class="container-fluid">
      <div class="row">        
          <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                    <h4 class="tm-brand">Warehouse Manage</h4>
                  </div>
                </div>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
                <li class="nav-item">
                  <a href="#intro" class="nav-link active">
                    <span class="d-inline-block mr-3">Intro</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link">
                    <span class="d-inline-block mr-3">About</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#talk" class="nav-link">
                    <span class="d-inline-block mr-3">Contact</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="#login" class="nav-link">
                      <?php if (isset($_SESSION["loggedin"])) { echo "Hello ".$_SESSION["username"]; } ?>  
                      <span class="d-inline-block tm-white-rect"></span>
                    </a>
                  </li>
                <?php if (!isset($_SESSION["loggedin"])) { ?>
                  <li class="nav-item">
                    <a href="#login" class="nav-link">
                      <span class="d-inline-block mr-3">LogIn</span>
                      <span class="d-inline-block tm-white-rect"></span>
                    </a>
                  </li>

                  </ul>
                <?php }else{ ?>
              <a href="#login" class="btn btn-light">Logout</a>
              <a href="#addp" class="btn btn-light" href="#addp">Add package</a>
              <a href ="#addp" class="btn btn-light" href="#addp">Send your package</a>
              <?php } ?>
              <ul class="nav flex-row tm-social-links">
                <li class="nav-item">
                  <a href="https://facebook.com" class="nav-link tm-social-link">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com" class="nav-link tm-social-link">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://dribbble.com" class="nav-link tm-social-link">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://linkedin.com" class="nav-link tm-social-link">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          
          <main role="main" class="ml-sm-auto col-12">
            <div
              class="parallax-window"
              data-parallax="scroll"
              data-image-src="img/img1.jpg">
              <div class="tm-section-wrap">
                <section id="intro" class="tm-section">
                    <div class="tm-bg-white-transparent tm-intro">
                        <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Introducing Warehouse Management</h2>
                        <p class="tm-color-gray">
                          Add 2-3 lines here.
                        </p>
                        <p class="mb-0 tm-color-gray">
                          you can add here if u want else just delete this from code. 
                        </p>
                    </div>              
                </section>
            </div>            
          </div>

          <div class="tm-section-wrap bg-light">
            <section id="about" class="row tm-section">
              <div class="col-xl-6">
                <div class="tm-section-half">    
                    <div><i class="fas fa-6x fa-balance-scale mb-5 tm-section-icon"></i></div>                        
                    <h2 class="tm-section-title tm-color-primary mb-5">About Us</h2>
                    <p class="mb-5">
                      This is just clg project
                    </p>
                    <p>
                      insert text here also if u want.
                    </p>
                </div>
              </div>
              
            </section>
          </div>
            
          
            
      
            
          
          <div class="tm-section-wrap bg-light">
            <section id="login" class="row tm-section">
              <?php if (!isset($_SESSION["loggedin"])) { ?>
                <div class="col-xl-6 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <a href="login.php"><h2 class="tm-color-primary tm-section-title mb-4">Login Here</h2></a>                       
                    </div>                    
                  </div>                  
                </div>
                <?php }else{ ?>
                  <div class="col-xl-6 mb-5">
                    <div class="tm-double-border-1 tm-border-gray">
                      <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                          <a href="logout.php"><h2 class="tm-color-primary tm-section-title mb-4">Logout here</h2></a>                       
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-xl-6 mb-5">
                                      
                  </div>

                  
                </section>
            </div>
            <div class="tm-section-wrap bg-light">
              <section id="addp" class="row tm-section">
                  <div class="col-xl-6 mb-5">
                    <div class="tm-double-border-1 tm-border-gray">
                      <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                          <a href="addpackage.php"><h2 class="tm-color-primary tm-section-title mb-4">ADD Package</h2></a>
                          
                      </div>                    
                    </div>                  
                  </div>
                  <div class="col-xl-6 mb-5">
                    <div class="tm-double-border-1 tm-border-gray">
                      <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                          <a href="sendpackage.php"><h2 class="tm-color-primary tm-section-title mb-4">SEND Package</h2></a>                       
                      </div>                    
                    </div>                  
                  </div>
                  
                  
                </section><?php } ?>
          </div>

          <div class="tm-section-wrap bg-light">
            <section id="talk" class="row tm-section">
                <div class="col-xl-6 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <h2 class="tm-color-primary tm-section-title mb-4">Talk to Us</h2>
                        <p class="mb-4">
                          Insert your address here
                        </p>
                        <p class="mb-3">
                          +91-86925487854 <br>
                          dk60@gmail.com <br>
                          
                        </p>
                    </div>                    
                  </div>                  
                </div>
                <div class="col-xl-6 mb-5">
                  <div class="tm-contact-form-wrap">
                    <form action="contact.php" method="POST" class="tm-contact-form">
                        <div class="form-group">
                          <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                        </div>
                        <div class="form-group">
                          <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                        </div>
                
                        <div class="form-group">
                          <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                        </div>
                
                        <div class="form-group mb-0">
                          <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary" name="contactbtn">
                            SEND
                          </button>
                        </div>
                      </form>
                  </div>                    
                </div>
              </section>
          </div>

        </main>        
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-scripts.js"></script>
  </body>
</html>