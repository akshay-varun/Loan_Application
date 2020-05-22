<!DOCTYPE html>
<html>
<head>
    <title>Fill Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form class="fill" method="post" action="process_form.php">
            <label for="first">First name</label>
    <input type="text" class="form-control" name="first" placeholder="First name" required>
        <br>
            <label for="second">Last name</label>
    <input type="text" class="form-control" name="last" placeholder="Second name" required>
        <br>



    <label for="mail">Mail</label>
    <input type="email" class="form-control"name="mail" value="
    <?php
    session_start();
    $conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";

    }
    $user=$_SESSION['username'];
    $sql = "SELECT email FROM users where username='$user' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo   $row["email"]. "";
        }
    }
    $conn->close();
    ?>" required>
    <br>
    <br>

            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" placeholder="Age" required>
    <br>
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" name="dob" placeholder="01/05/2000" required>
    <br>
            <label for="income">Monthly Income</label>
            <input type="number" class="form-control"name="income" placeholder="" required>
    <br>
            <label for="amount">Loan Amount Needed</label>
            <input type="number" class="form-control" name="amount" placeholder="" required>
    <br>

            <label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Purpose</label>
            <select class="custom-select my-1 mr-sm-2" >
                <option selected >Choose...</option >

                <option value="Home Loan"name="purpose" id="purpose1">Home Loan</option >
                <option value="Car Loan" name="purpose" id="purpose2">Car Loan</option>
                <option value="Industrial Loan" name="purpose" id="purpose3">Industrial Loan</option>
            </select>
    <br>
    <br>

    <fieldset class="form-group">
        <div class="row" >
            <label >Tenure</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tenure" id="tenure6" value="6" checked>
                    <label class="form-check-label" for="tenure">
                        6 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  name="tenure" id="tenure12" value="12">
                    <label class="form-check-label" for="tenure">
                        12 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tenure" id="tenure24" value="24">
                    <label class="form-check-label" for="tenure">
                        24 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  name="tenure" id="tenure32" value="32">
                    <label class="form-check-label" for="tenure">
                        32 Months
                    </label>
                </div>
            </div>
        </div>

        <br>
        <br>

    <button class="btn btn-primary" type="submit" name="save">Submit Form</button>
</form>

</body>
