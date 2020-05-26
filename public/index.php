<!DOCTYPE html>
<html>
<head>
    <title>
        Home
    </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&family=Piedra&display=swap" rel="stylesheet">
</head>
<body>
<div class="header1">
    <h1 style="color:white;
    position: relative;
    top:100px;
    left: 35%;
font-family: 'Inconsolata', monospace;
font-size: 60px">LOAN APPLICATION SYTEM</h1>
</div>
<br>
<br>

<h1 style="color: red;text-align: center;font-family: 'Piedra', cursive;">USER DASHBOARD</h1>
<br><br>
<div class="row">
    <div class="column">
        <form method="get" action="register.php">
            <button type="submit" class="button1">User Register</button>
        </form>
    </div>
    <div class="column">
        <form method="get" action="login.php">
            <button type="submit" class="button1">User Login</button>
        </form>
    </div>
</div>
<br>
<br>
<br>
<br>
<h1 style="color: red;text-align: center;font-family: 'Piedra', cursive;">ADMIN DASHBOARD</h1>
<div class="row">
    <div class="column">
        <form method="get" action="admin.php">
            <button type="submit" class="button1">Admin Register</button>
        </form>
    </div>
    <div class="column">
        <form method="get" action="admin_login.php">
            <button type="submit" class="button1">Admin Login</button>
        </form>
    </div>
</div>
</body>
</html>



