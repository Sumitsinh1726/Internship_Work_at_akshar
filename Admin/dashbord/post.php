<?php

include("../../connect.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneno = $_POST['phoneno'];

$hash = password_hash($password,PASSWORD_DEFAULT);


if($name !=null && $email !=null){
    $sql = "INSERT INTO `registration`(`id`, `name`, `email`,`password`,`phoneno`)
     VALUES (NULL,'$name','$email','$hash','$phoneno')";
}
else{
    die ('Balank ');
}


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

header("location:http://localhost/login/admin/dashbord/");

?>