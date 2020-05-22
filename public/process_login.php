<?php
require_once '../inc/db.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="select * from users where email=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result=$stmt->get_result();
    if($result->num_rows>0)
    {
        $result=$result->fetch_assoc();
        $user_id=$result['user_id'];
        $db_password=$result['password'];
        if(password_verify($password,$db_password)){
            //Password is correct
            $_SESSION['logged_in']=true;
            $_SESSION['user']=$user_id;
            header('location:protected.php');
            exit();
        }
        else{
            $error['password']='Enter correct password';
        }
    }else
    {
        $error['email']='Email is not registerd';
    }

}
?>
