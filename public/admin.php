<?php include('admin_reg_proc.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Admin Register</h2>
</div>

<form method="post" action="admin_reg_proc.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="admin_login.php">Sign in</a>
    </p>
</form>
</body>
</html>