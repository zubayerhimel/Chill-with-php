<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div id="wrapper">
        <span class="form-container">
            <span class="form-heading">Sign Up</span>
            <?php
                session_start();
            ?>
            <form action="Registration.php" mathod="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="uname" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="uemail" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="upassword" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <input class="button" type="submit" name="submit" value="Register">
                </div>
                <div class="switch-login">
                    <a href="#">Already have an account? <span>Login</span></a>
                </div>
            </form>
        <?php

            include_once ('Crud.php');
            
            $crud = new Crud();
            
            if(isset($_POST['submit'])){
                $uname = $_POST['uname'];
                $uemail = $_POST['uemail'];
                $upassword = md5($_POST['upassword']);
                
                $result = $crud->execute("INSERT into registration(username, email, password) VALUES('$uname','$uemail','$upassword')");
                
                if($result){
                    $_SESSION['email'] = $uemail;
                    $_SESSION['username'] = $username;
                    header("Location:AddBankInfo.php");
                }else{
                    echo "Insertion Problem!";
                }                
            }        	
        ?>
        </span>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>