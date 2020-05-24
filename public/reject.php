<?php
$conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
if(isset($_POST['update']))
{
    $email=$_POST['mail'];
    $sql="UPDATE form set status=0";
    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}