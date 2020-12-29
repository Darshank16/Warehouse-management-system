<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['sendreq'])){
        $pname2 = $_POST['proname'];        
        $quant2 = $_POST['quan'];
        $customer = $_POST['customername'];
        $address1 = $_POST['address'];       
        $userid = $_SESSION['user_id'];
        
        

        $insertquery = "insert into requser(uid,pname1,pquantity,customer,address)values('$userid','$pname2','$quant2','$customer','$address1')";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Request Sent.");
                        location.replace("sendpackage.php");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Request Fail.Try Again");
                         location.replace("sendpackage.php");
                     </script>
                <?php

        }
    }
?>