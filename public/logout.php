<?php
require_once "../inc/login_helper.php";
init_function();
session_destroy();
header('location: login.php');