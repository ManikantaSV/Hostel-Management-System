
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>admin login</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        
        <div class="container">
        <div class='wrapper'>
        <div class="title"><span>Admin Login</span></div>
        <form action="adminlogin.php" method="post" aria-autocomplete="inline">
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
            <?php
        include 'logincheckadmin.php';
        ?>
        </form>

        </div>
        </div>
    </body>
</html>