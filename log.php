<?php 
        session_start();
        require_once 'connection.php';
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $loginquery = "select * from users where username= '$username' AND password='$password'";
            $query = mysqli_query($conn,$loginquery);

            $username_count = mysqli_num_rows($query);
            if($username_count){
                $user = mysqli_fetch_assoc($query);
                $_SESSION["loggedin"]=true;
                $_SESSION["user_id"]=$user["user_id"];
                $_SESSION["username"]=$user["username"];
                $_SESSION["level"]=$user["level"];
                if ($user["level"]=="Admin") {
                    ?>
                        <script>
                            alert("Logged In.");
                            location.replace("admin/index.php");
                        </script>

                    <?php 
                }else{
                   ?>
                        <script>
                            alert("Logged In.");
                            location.replace("homepage.php");
                        </script>
                    <?php
                }
            }
            else{
                ?>
                <script>
                        alert("Email Or Password is wrong.Try Again");
                        location.replace("login.php");
                </script>
                <?php
            }

            
        }   
?>