<?php
session_start();
require_once 'connection.php';
$userid = $_SESSION['user_id'];
$sql = "SELECT * FROM requser where uid='$userid'";

$result = $conn->query($sql);
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
    <link rel="stylesheet" type="text/css" href="addregister.css">
    

  </head>
  <body>
    
    <div class="container-fluid " id="id1">
             <div class="row">
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-body">
                    <h3 style="text-align: center;">Send Package</h3>
                    <form action="sendpack.php" method="POST">
                      <div class="form-group">
                        <label>Package/Product Name</label>
                        <input type="text" name="proname" class="form-control">
                        
                      </div>
                      <div class="form-group">
                        <label>Quantity/Number</label>
                        <input type="number" name="quan" class="form-control" >
                      </div>

                      <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" name="customername" class="form-control" >
                      </div>

                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" >
                      </div>
                      
                      <button type="submit" class="btn btn-primary" name="sendreq">Send</button>
                      
                    </form>
                    <a href="homepage.php"><button type="submit" class="btn btn-dark">Back to Homepage</button></a>
                </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-body">
                    <h3 style="text-align: center;">Your Request</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Request ID</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">quantity</th>
                          <th scope="col">Customer</th>
                          <th scope="col">Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row = $result->fetch_assoc()){?>
                        <tr>
                          <th scope="row"><?php echo $row["reqid"]; ?></th>
                          <td><?php echo $row["pname1"]; ?></td>
                          <td><?php echo $row["pquantity"]; ?></td>
                          <td><?php echo $row["customer"]; ?></td>
                          <td><?php echo $row["address"]; ?></td>

                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                </div>
                </div>
                </div>
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