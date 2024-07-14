
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        
        <div class="container">
        <div class='wrapper'>
        <div class="title"><span>Login</span></div>
        <form action="login.php" method="post" aria-autocomplete="inline">
            <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="username" required>   
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="password" name="password" required>  
            </div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
            <!--<div class="signup-link"><a href="signup.php">Forgot password?</a></div>-->
            <?php
        include 'logincheck.php';
        ?>
        </form>

        </div>
        </div>
    </body>
</html>