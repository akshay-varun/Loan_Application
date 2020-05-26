<?php
$conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
if(isset($_POST['update']))
{
    $email=$_POST['mail'];
    $sql="update form set status=1 where email='$email'";
    if (mysqli_query($conn, $sql)) {
        header('location: admin_dashboard.php');
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}