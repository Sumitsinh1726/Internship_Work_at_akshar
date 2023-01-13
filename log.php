<?php


include('connect.php');




$email = $_POST['email'];
$password = $_POST['password'];
// $hashed_password = crypt($password, 'rl');
$email_search = "select * from registration where email='$email' ";
// print_r($email_search);

$query = mysqli_query($conn, $email_search);


$email_count = mysqli_num_rows($query);
$email_pass = mysqli_fetch_assoc($query);

$db_pass =  $email_pass['password'];


if (password_verify($password, $db_pass)) {
    $id = "SELECT `name` FROM `registration` WHERE `password` = '$db_pass'";
    $query = $conn->query($id);
    $name =  $query->fetch_assoc();

    $email = "SELECT `email` FROM `registration` WHERE `password` = '$db_pass'";
    $query_mail = $conn->query($email);
    $email_get =  $query_mail->fetch_assoc();


    $phoneno = "SELECT `phoneno` FROM `registration` WHERE `password` = '$db_pass'";
    $query_phoneno = $conn->query($phoneno);
    $phone_get =  $query_phoneno->fetch_assoc();

    session_start();

    $_SESSION['name'] = $name['name'];
    $_SESSION['email'] = $email_get['email'];
    $_SESSION['phoneno'] = $phone_get['phoneno']; 

    echo "Password verified!";
    header('location:http://localhost/login/home.php');
} else {

    echo "password Incorrect";

    // header('location:index.php');

}
