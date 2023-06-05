<?php 
include "db_conn.php";

if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $sql = "INSERT INTO crud(`id`, `first_name`, `last_name`) VALUES ('NULL','$first_name','$last_name')";

        $result = mysqli_query($conn , $sql);

        if ($result) {
            header("Location: index.php?msg= new record suceefull");
           
        }
        else{
            echo"Failed:" .mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>application crud</title>
</head>
<body>
<nav class="navbar  justify-content-center " style="background-color: aqua;">php crud</nav>
<div class="container">

    <div class="text-center">
        <h3>Add new user</h3>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width: 50vw; min-width: 300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="from-label">First name:</label>
                <input type="text" class="from-control" name="first_name" placeholder="dhruv">
            </div>
            <div class="col">
                <label class="from-label">last name:</label>
                <input type="text" class="from-control" name="last_name" placeholder="ahir">
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>