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
            <span class="form-heading">Sign In</span>
            <form action="Login.php" method="POST">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <input class="button" type="submit" name="submit" value="Login">
                </div>
                <div class="switch-login">
                    <a href="Registration.php">New user? <span>Sign Up</span></a>
                </div>
            </form>
        <?php
            session_start();

            include_once ('./Crud.php');
            
            $crud = new Crud();
            if(isset($_POST['submit'])){
            
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                
                
                $query = "select * from registration where username='$username' AND password='$password'";
                
                $result = $crud->getData($query);
                if($result) {
                    foreach($result as $key=>$res){
                        $email = $res['email'];
                        $username = $res['username'];
                    }
                    $_SESSION['email'] = $email;
                    $_SESSION['username'] = $username;

                    header("Location:ViewAccountInfo.php");
            }else{
                echo "Login Problem";
            }   
        }    
    ?>
        </span>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>