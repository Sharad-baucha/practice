<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <form action="" method="post">

        <p>
            <label>Email Address</label>
            <input type="email" name="email" class="form-control">
        </p>
        <p>
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </p>   
        <p>
            <input type="submit" class="btn btn-primary" value="Login">
        </p> 
        
    </form>  
    <a href="register.php">If you are new, register first</a>
</body>
</html>