<?php
    session_start();
    require_once 'connection.php';

    if(isset($_POST['del'])){
        $userid = $_POST['delid'];
        
        
        

        $insertquery = "delete from users where user_id='$userid'";
        
        $iquery = mysqli_query($conn,$insertquery);

        if($iquery)
        {
                ?>
                    <script>
                        alert("Successfully deleted.");
                        location.replace("userinfo.php");
                    </script>
                <?php

                }else{
                ?>
                    <script>
                         alert("Fail to delete user.Please Try Again.");
                         location.replace("userinfo.php");
                     </script>
                <?php

        }
    }
?>