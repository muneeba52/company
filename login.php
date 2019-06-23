<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
   <?php
    
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            require_once('inc/User.php');
            require_once('inc/Database.php');
            $user= new User();
            $user->setUsername($_POST['text_username']);
            $user->setPassword($_POST['text_password']);
            
            if($user->Error==false){
                $db=new Database();
                $connection=$db->Connect();
                
                if($user->isAuthentic($connection)){
                    $_SESSION['auth']=$user;
                    header("location:profile.php");
                }
                else
                    echo "Invalid Username or password";
                
            }
        }
    ?>
    <form action="" method="post">
        
         <div class="form-group">
                    <label>Enter the Username</label>
                     <input type="text" name="text_username">
                </div>
                <div class="form-group">
                    <label>Enter the Password</label>
                     <input type="password" name="text_password">
                </div>
                
                <input type="submit">
    </form>
</body>
</html>