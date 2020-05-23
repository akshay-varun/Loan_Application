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
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT first_name,last_name,email,age,dob,income,amount,purpose,tenure from form";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
// output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<td>" . $row["first_name"]. "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"]. "</td><td>" . $row["age"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["income"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["purpose"] . "</td><td>" . $row["tenure"] . "</td><td>";
        }
        echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
</table>
</body>
</html>