<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <?php
        session_start();
    ?>
    <div id="wrapper">
        <span class="form-container">
            <span class="form-heading">Sign Up</span>
            <form action="Registration.php" method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <input class="button" type="submit" name="submit" value="Register">
                </div>
                <div class="switch-login">
                    <a href="Login.php">Already have an account? <span>Login</span></a>
                </div>
            </form>
        <?php

            include_once ('./Crud.php');
            
            $crud = new Crud();
            
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                
                $result = $crud->execute("INSERT into registration(username, email, password) VALUES('$username','$email','$password')");
                
                if($result){
                    $_SESSION['email'] = $email;
                    $_SESSION['username'] = $username;
                    header("Location:ViewAccountInfo.php");
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