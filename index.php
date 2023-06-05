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

<a href="add_new.php" class="btn btn-dark mb-3"> Add new</a>

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First_name</th>
      <th scope="col">Last_name</th>
    </tr>
  </thead>
  <tbody>
<?php

    include "db_conn.php";
    $sql = "SELECT * FROM crud";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
       
?>
        <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td>
              <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
              <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
        </td>
      </tr>

      <?php

    }
?>

    
    
  </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>