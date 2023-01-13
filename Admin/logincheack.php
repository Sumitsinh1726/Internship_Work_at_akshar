<?php

session_start();

include('../connect.php');

$db = mysqli_select_db($conn, 'login');

$username =$_POST['username'] ;
$password = $_POST['password'];

$user_search = "select * from admin where username='$username'";
$query = mysqli_query($conn, $user_search);

$user_count = mysqli_num_rows($query);

$user_pass = mysqli_fetch_assoc($query);


$db_pass = $user_pass ['password'];
// $hash = password_hash($db_pass,PASSWORD_DEFAULT);

// print_r($hash);
// exit;

if(password_verify($password,$db_pass )){
    echo "password is Correect";
    header('location:http://localhost/login/admin/dashbord/');
} else{
    echo "wrong Pass";
}

//$db_pass =  $email_pass['password'];




