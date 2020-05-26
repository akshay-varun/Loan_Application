<html>
<head>
    <title>Status</title>
    <style type="text/css">
        table {
            position: absolute;
            left: 25%;
        }

        tr {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 80px;
            background: #666;
            color: #FFF;
            padding: 2px 6px;
            border-collapse: separate;
            border: 1px solid #000;
        }

        td {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 60px;
            border: 2px solid #DDD;
        }
        .back{
            background: antiquewhite;
        }
        .approve{
            background: green;
            text-align: center;
            color: black;
            padding-bottom: 40px
        }
        .decline{
        background: red;
        padding-bottom: 40px;
        text-align: center;
        }
        .review{
            background: aquamarine;
        text-align: center;
        padding-bottom: 40px
        }
    </style>
</head>
<body class="back">
<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
}
$conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
$status=0;
$user= $_SESSION['username'];
$sql = "select status from form where email in(select email from users where username='$user');";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
            $status = $row["status"] . "";
    }
}
$conn->close();
if ($status == 1) {
    echo "
           <h1 class='approve'>Your Loan Apllication is Approved</h1>
    ";
} elseif ($status == 2) {
    echo "
           <h1 class='decline'>Your Loan Apllication is Not Approved</h1>
    ";
} else {
    echo "
           <h1 class='review'>Your Loan Apllication is Under Review</h1>
    ";
}

?>
<table style="background: antiquewhite">
    <?php

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
    }

    $user=$_SESSION['username'];
    $conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "SELECT first_name,last_name,email,age,dob,income,amount,purpose,tenure from form where email in (select email from users where username='$user')";
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            $mail = $row["email"];
            echo "<tr>" .
                "<td>First Name</td>" .
                "<td>" . $row["first_name"] . "</td>" .
                "</tr>" .
                "<br>" .
                "<tr>" .
                "<td>Last Name</td>" .
                "<td>" . $row["last_name"] . "</td>" .
                "</tr>" .
                "<br>" .
                "<tr>" .
                "<td>Email</td>" .
                "<td>" . $row["email"] . "</td>" .
                "</tr>" .
                "<br>" .
                "<tr>" .
                "<td>Age</td>" .
                "<td>" . $row["age"] . "</td>" .
                "</tr>" .
                "<br>" .
                "<tr>" .
                "<td>Date Of Birth</td>" .
                "<td>" . $row["dob"] . "</td>" .
                "</tr>" .
                "<br>" .
                "<tr>" .
                "<td>Income</td>" .
                "<td>" . $row["income"] . "</td>" .
                "</tr>" .
                "<br>" .
                "<tr>" .
                "<td>Amount Needed</td>" .
                "<td>" . $row["amount"] . "</td>" .
                "</tr>" .
                "<br>" .
                "<tr>" .
                "<td>Tenure</td>" .
                "<td>" . $row["tenure"] . "</td>" .
                "</tr>" .
                "<br>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>
</table>
</body>
</html>