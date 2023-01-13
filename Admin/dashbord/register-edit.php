<?php
session_start();
include('../../connect.php');

$result =    mysqli_query($conn, "SELECT * FROM registration");



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                if(isset($_SESSION['status'])){
                    echo "<h4>" .$_SESSION['status']."</h4>";

                }
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update User Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="./update.php" method="post">
                        <div class="form-group mb-3">
                                <label for="">Id</label>
                             
                                <input type="text" name="id" class="form-control" value=" <?php echo $_GET['id']; ?>" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">User Name</label>
                                <input type="text" name="name" class="form-control"  />
                            </div>

                            <div class="form-group mb-3">
                                <label for="">User Email</label>
                                <input type="text" name="email" class="form-control"  />
                            </div>

                            <div class="form-group mb-3">
                                <label for="">User Phoneno</label>
                                <input type="text" name="phoneno" class="form-control"  />
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary" type="submit"> Update User</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    </script>


</body>

</html>