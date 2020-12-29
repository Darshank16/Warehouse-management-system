<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['del'])){
        $reqid = $_POST['delid'];
        
        
        

        $insertquery = "delete from requser where reqid='$reqid'";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Successfully deleted.");
                        location.replace("managereq.php");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Fail to delete user.Please Try Again.");
                         location.replace("managereq.php");
                     </script>
                <?php

        }
    }
?>