<?php
    require_once 'connection.php';

    if(isset($_POST['signup'])){
        $username1 = $_POST['uname'];
        $email1 = $_POST['emailid'];
        $password1 = $_POST['password'];
        $cpassword1=$_POST['cpassword'];
        // encrypt

        $pass = md5($password1);

        $emailquery =" select * from users where email = '$email1'";
        $userquery = " select * from users where username = '$username1'";

        $query = mysqli_query($conn,$emailquery);

        $query1 = mysqli_query($conn,$userquery);

        $emailcount = mysqli_num_rows($query);
        $usernamecount = mysqli_num_rows($query1);

        if($emailcount>0){
            /*$email1_error = 'EmailID already Exist.';*/
            ?>
                <script>
                        alert("Email Or Username already exists.");
                        location.replace("register.php");
                </script>
            <?php
        }
        elseif ($usernamecount>0) {
            /*$username1_error = 'Username already Exist.';*/
            ?>
                <script>
                        alert("Email Or Username already exists.");
                        location.replace("register.php");
                </script>
            <?php
        }
        else{
            if($password1 == $cpassword1){

                $insertquery = "insert into users(username,email,password,level)values('$username1','$email1','$pass','user')";

                $iquery = mysqli_query($conn,$insertquery);

                if($iquery){
                    ?>
                        <script>
                            alert("Successfully Registered.");
                            location.replace("login.php");
                        </script>
                    <?php

                    }else{
                    ?>
                        <script>
                            alert("Failed.");
                        </script>
                    <?php

                }

            }else{
                /*$pass1_error = 'Password are not matching.';*/
                ?>
                <script>
                        alert("Password does not match");
                        location.replace("register.php");
                </script>
                <?php
            }
        }




    }
?>