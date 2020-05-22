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
            <input type="text" class="form-control" id="first" placeholder="First name" required>
        <br>
            <label for="second">Last name</label>
            <input type="text" class="form-control" id="last" placeholder="Last name"  required>
        <br>

            <label for="mail">Mail</label>
            <input type="email" class="form-control" id="mail" value="
            <?php
            session_start();
            require_once '../inc/db.php';
            if (!isset($_SESSION['username'])) {
                $_SESSION['msg'] = "You must log in first";

             }
         $user=$_SESSION['username'];
            $sql = "SELECT email FROM users where username='$user' ";
            $result=$conn->query(sql);
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
            <input type="number" class="form-control" id="age" placeholder="Age" required>
    <br>
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" placeholder="01/05/2000" required>
    <br>
            <label for="income">Monthly Income</label>
            <input type="number" class="form-control" id="income" placeholder="" required>
    <br>
            <label for="amount">Loan Amount Needed</label>
            <input type="number" class="form-control" id="amount" placeholder="" required>
    <br>

            <label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Purpose</label>
            <select class="custom-select my-1 mr-sm-2" >
                <option selected>Choose...</option>

                <option value="Home Loan" id="purpose">Home Loan</option>
                <option value="Car Loan" id="purpose">Car Loan</option>
                <option value="Industrial Loan" id="purpose">Industrial Loan</option>
            </select>
    <br>
    <br>

    <fieldset class="form-group">
        <div class="row" >
            <legend class="col-form-label col-sm-2 pt-0">Tenure</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="tenure" value="6" checked>
                    <label class="form-check-label" for="tenure">
                        6 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  id="tenure" value="12">
                    <label class="form-check-label" for="tenure">
                        12 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  id="tenure" value="24">
                    <label class="form-check-label" for="tenure">
                        24 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"  id="tenure" value="32">
                    <label class="form-check-label" for="tenure">
                        32 Months
                    </label>
                </div>
            </div>
        </div>

        <br>
        <br>

    <button class="btn btn-primary" type="submit" id="save">Submit Form</button>
</form>

</body>
