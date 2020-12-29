<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['addp'])){
        $pname1 = $_POST['pname'];
        $cat = $_POST['category1'];
        $quant = $_POST['quantity1'];
        $userid = $_SESSION['user_id'];
        
        

        $insertquery = "insert into products(uid,pname,pcategory,quantity)values('$userid','$pname1','$cat','$quant')";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Successfully Added.");
                        location.replace("addpackage.php");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Fail to add product.Please Try Again.");
                         location.replace("addpackage.php");
                     </script>
                <?php

        }
    }
?>