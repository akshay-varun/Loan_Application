<!DOCTYPE html>
<html>
<head>
    <title>Table with database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #588c7e;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
<p> <a href="index.php?logout='1'" style="color: red;" class="logout">LOGOUT</a> </p>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mail-ID</th>
        <th>Age</th>
        <th>Date Of Birth</th>
        <th>Income</th>
        <th>Loan Amount</th>
        <th>Purpose</th>
        <th>Tenure</th>
        <th>Approve</th>
        <th>Reject</th>
    </tr>
    <?php
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: index.php");
    }
    $conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT first_name,last_name,email,age,dob,income,amount,purpose,tenure from form ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {
            $mail=$row["email"];
            echo "<td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["age"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["income"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["purpose"] .
                "</td><td>" . $row["tenure"] . "</td><td>" .

                "<form action=\"accept.php\" method='post'>
                 <input type='hidden' name='mail' value=$row[email]>
                
                 <input type=\"submit\" name='update' value=\"Accept\" />
            </form>" . "<td>" .
           "<form  action='reject.php' method='post'>
                
                <input type='hidden' name='mail' value=$row[email]>
               <input type='submit' name='update' value='Reject'>
        </form>" ."<tr>";
        }

        echo "</table>";
    } else { echo "0 results"; }
    $conn->close();


    ?>
</table>
</body>
</html>