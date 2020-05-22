<?php

require_once "../inc/login_helper.php";
init_function();
if(is_logged_in()===false) {
    header('location: login.php');

}
?>
<h1> You are protected </h1>
<p>
    <a href="logout.php">Log Out</a>
</p>


