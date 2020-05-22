<?php
$conn = mysqli_connect('localhost', 'dbms', 'hdjdh83748jfjf#@A', 'tutorial');
if(isset($_POST['save']))
{
    $first_name = $_POST['first'];
    $last_name = $_POST['last'];
    $email=$_POST['mail'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $income=$_POST['income'];
    $amount=$_POST['amount'];
    $purpose=$_POST['purpose'];
    $tenure=$_POST['tenure'];
    $sql = "INSERT INTO form (first_name,last_name,email,age,dob,income,amount,purpose,tenure)
	 VALUES ('$first_name','$last_name','$email',$age,'$dob',$income,$amount,'$purpose',$tenure)";

    if (mysqli_query($conn, $sql)) {
        echo "Your record are Succesfully Stored";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
