<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        h3{
    background-color: rgb(150, 144, 206);
}
    </style>
</head>

<body>
  <h2 class="header">HOSTEL MANAGEMENT SYSTEM
  </h2>
    <main id="main" class="container">
        
        <form action="login.php" class="form" method="POST">
            <h3 style="color: rgb(6, 22, 247);">Admin Login</h3>
            <input type="text" name="username" id="username" placeholder="Login Id" required data-error="usermane required">
            <input type="password" name="password" id="password" placeholder="Password" required data-error="password required">
            <input type="submit" class="submit " name="submit" value="LOG IN">
            <?php include('login1.php'); ?>
        </form>
    </main>
</body>
</html>