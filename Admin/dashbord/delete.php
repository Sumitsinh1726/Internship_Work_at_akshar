<?php

include('../../connect.php');
$query = ("DELETE FROM registration WHERE id='".$_GET["id"]. "'");

if (mysqli_query($conn,$query)) {
    echo "Record delete sucessfully";
    header("location:http://localhost/login/admin/dashbord/index.php");
}else{
    echo "error deleting records: " . mysqli_errno($conn);
}
mysqli_close($conn);



?>