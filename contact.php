<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['contactbtn'])){
        $cname = $_POST['contact_name'];        
        $cemail = $_POST['contact_email'];
        $cmsg = $_POST['contact_message'];
        
        
        

        $insertquery = "insert into contactus(name,mail,msg)values('$cname','$cemail','$cmsg')";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Message Sent.");
                        location.replace("homepage.php");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Message Fail.Try Again");
                         location.replace("homepage.php");
                     </script>
                <?php

        }
    }
?>