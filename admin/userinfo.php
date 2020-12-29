<?php
session_start();
require_once 'connection.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
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

    


    <!-- Modal -->
    <div class="modal fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="deluser.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter User ID to delete</label>
                <input type="text" class="form-control" name="delid">
                
              </div>
              
              
              <button type="submit" class="btn btn-danger" name="del">Delete</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>


     <div class="card-body">
        
        <table class="table table-hover" style="padding-top: 100px;">
              <thead>
                <tr>
                  <th scope="col" style="width: 5%;">ID</th>
                  <th scope="col" style="width: 40%;">Email</th>
                  <th scope="col" style="width: 40%;">Username</th>
                  <th scope="col" style="width: 7%;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteuser">Delete</button></th>
                  
                </tr>
              </thead>
              <tbody>
                <?php while($row = $result->fetch_assoc()){?>
                <tr>
                  <th scope="row"><?php echo $row["user_id"]; ?></th>
                  <td><?php echo $row["email"]; ?></td>
                  <td><?php echo $row["username"]; ?></td>                               
                  
                  
                </tr>
                <?php } ?>
              </tbody>
        </table>

    </div>

    <?php include 'include1/jsfiles.php';?>

</body>

</html>