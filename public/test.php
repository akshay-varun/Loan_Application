<?php
session_start();
require_once '../inc/db.php';

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";

}
$user=$_SESSION['username'];
$sql = "SELECT email FROM users where username='$user' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo   $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>