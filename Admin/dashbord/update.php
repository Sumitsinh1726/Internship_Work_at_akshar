<?php

include('../../connect.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];

    $query = "UPDATE `registration` SET `name`='$name',`email`='$email',`phoneno`='$phoneno' WHERE id='$id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Sucessfully";
        header("location:http://localhost/login/admin/dashbord/");
    }else{
        $_SESSION['status'] = "Not Updated";
       
        }




}



?>