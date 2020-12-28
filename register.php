<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Warehouse Management-Register</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/loginregister.css" />

  </head>
  <body>
    
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="reg.php" method="POST" class="register-form" id="register-form" >
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="uname" id="name" placeholder="Your Name"/>
                        </div>
                        <div style="text-align: left; margin-top: -20px;" >
                            <?php 
                                if(isset($username1_error)){
                                    ?><p style="color: #d93025;"><?php echo $username1_error ?></p><?php
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="emailid" id="email" placeholder="Your Email"/>
                        </div>
                        <div style="text-align: left; margin-top: -20px;" >
                            <?php 
                                if(isset($email1_error)){
                                    ?><p style="color: #d93025;"><?php echo $email1_error ?></p><?php
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="cpassword" id="re_pass" placeholder="Repeat your password"/>
                        </div>
                        <div style="text-align: left; margin-top: -20px;" >
                            <?php 
                                if(isset($pass1_error)){
                                    ?><p style="color: #d93025;"><?php echo $pass1_error ?></p><?php
                                }
                            ?>
                        </div> 
                        <div class="form-group form-button">
                            <button type="submit" name="signup" class="btn btn-dark">Register</button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="img/signup.png" alt="sing up image"></figure>
                    <a href="login.php" class="signup-image-link">I am already member</a>
                    <a href="homepage.php" class="signup-image-link"><i class="fas fa-arrow-left"></i>Go back to Homepage</a>
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