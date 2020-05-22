<?php
session_start();
require_once '../inc/db.php';

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    $username1=$_SESSION['username'];
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
$query = mysqli_query($conn, "SELECT email from users where username=$username");
echo $query;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>Please fill the form</h2>
</div>

    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <?php echo $_SESSION['username']; ?></p>


        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

<a href="fill-form.php">Fill the form</a>

<?php
$user=$_SESSION['username'];
$query1='select email from users where username=$user ';
$ans=$conn->query($query1);
$ans1=$ans->fetch_assoc();
print_r($ans1);
echo $ans1;
?>
</body>
</html>