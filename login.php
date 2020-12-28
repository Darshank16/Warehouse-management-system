<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Warehouse Management-Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/loginregister.css" />

  </head>
  <body>
    
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="img/login.jpg" alt="sing up image"></figure>
                    <a href="homepage.php" class="signup-image-link"><i class="fas fa-arrow-left"></i>Go back to Homepage</a>
                    <a href="Register.php" class="signup-image-link">Create an account</a>
                </div>
                
                <div class="signin-form">
                    <h2 class="form-title">Log in</h2>
                    <form action="log.php" method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="your_name" placeholder="Your Name"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password"/>
                        </div>
                        <?php 
                          if(isset($password_error)){
                              ?><p style="color: #d93025;"><?php echo $password_error ?></p><?php
                          }
                        ?>
                        <div class="form-group form-button">
                            <button type="submit" name="login" class="btn btn-dark">Login</button>
                        </div>
                    </form>                   
                </div>
                
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-scripts.js"></script>
  </body>
</html>