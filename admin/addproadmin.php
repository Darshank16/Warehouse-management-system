<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['addpro'])){
        $pname1 = $_POST['pname'];
        $cat = $_POST['cat1'];
        $quant = $_POST['quan'];
        
        
        

        $insertquery = "insert into products(pname,pcategory,quantity)values('$pname1','$cat','$quant')";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Successfully Added.");
                        location.replace("manageproduct.php");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Fail to add product.Please Try Again.");
                         location.replace("manageproduct.php");
                     </script>
                <?php

        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Warehouse Management</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

    <?php include 'include1/sidebar.php';?>

    <?php include 'include1/topnav.php';?>
    <div class="container">
    <form method="POST">
      <div class="form-group">
        <label>Package Name</label>
        <input type="text" class="form-control" name="pname">      
      </div>
      <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" name="cat1">      
      </div>
      <div class="form-group">
        <label>Quantity</label>
        <input type="number" class="form-control" name="quan">      
      </div>
      <button type="submit" class="btn btn-primary" name="addpro">Submit</button>
    </form>
    </div>

    <?php include 'include1/jsfiles.php';?>

</body>

</html>