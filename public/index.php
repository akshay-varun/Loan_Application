<?php
session_start();
require_once '../inc/db.php';

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
        <p class="header">Welcome <?php echo $_SESSION['username']; ?></p>


        <p> <a href="index.php?logout='1'" style="color: red;" class="logout">LOGOUT</a> </p>
    <?php endif ?>


    <?php
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
    }
    $conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
    $status=0;
    $user= '';
       $user=$_SESSION['username'];
    $sql = "select first_name from form where email in(select email from users where username='$user');";
    $result=$conn->query($sql);
    if ($result) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            $status= $row["first_name"] . "";
        }
    }
    $conn->close();
    if($status) {
        echo "
        <br>
        <br>
            <h1 style='text-align: center;color: brown ' > You have already filled the form </h1>
        <br>
        <br>
            <h2 style='text-align: center;color: blueviolet'>Check you Application Status</h2>
           
           <br>
           <br>
            <form action=\"status.php\">
              <input type=\"submit\" value=\"Check Status\" class='button'>
            </form>";

    }
    else
    {
        echo "
              <br>
              <br> 
        <h1 style='text-align: center;color: brown '>Kindly Fill the form here </h1>
         <br>
          <br>
          <form action=\"fill-form.php\">
        <input type=\"submit\" value=\"Fill the Form\" class='button'>
        </form> 
        ";
    }
    ?>

</body>
</html>