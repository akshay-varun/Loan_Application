<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Fill Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div >
<form class="fill">
            <label for="first">First name</label>
            <input type="text" class="form-control" id="first" placeholder="First name"required>
        <br>
            <label for="second">Last name</label>
            <input type="text" class="form-control" id="second" placeholder="Last name"  required>
        <br>



    <label for="mail">Mail</label>
    <input type="email" class="form-control" id="mail" placeholder="<?php  if (isset($_SESSION[''])) : ?>
       <?php echo $_SESSION['email']; ?>
    <?php endif ?>" required>
    <br>
    <br>




    <label for="age">Age</label>
            <input type="number" class="form-control" id="age" placeholder="Age" required>
    <br>
            <label for="birth">Date of Birth</label>
            <input type="text" class="form-control" id="birth" placeholder="01/05/2000" required>
    <br>
            <label for="income">Monthly Income</label>
            <input type="number" class="form-control" id="income" placeholder="" required>
    <br>
            <label for="needed">Loan Amount Needed</label>
            <input type="number" class="form-control" id="income" placeholder="" required>
    <br>

            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Purpose</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                <option selected>Choose...</option>
                <option value="Home Loan">Home Loan</option>
                <option value="Car Loan">Car Loan</option>
                <option value="Industrial Loan">Industrial Loan</option>
            </select>
    <br>
    <br>

    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Tenure</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="6" checked>
                    <label class="form-check-label" for="gridRadios1">
                        6 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="12">
                    <label class="form-check-label" for="gridRadios2">
                        12 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="24">
                    <label class="form-check-label" for="gridRadios2">
                        24 Months
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="32">
                    <label class="form-check-label" for="gridRadios2">
                        32 Months
                    </label>
                </div>
            </div>
        </div>

        <br>
        <br>

    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</body>