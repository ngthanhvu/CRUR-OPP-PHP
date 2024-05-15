<?php

include_once "DBUntil.php";

$dbhelper = new DBUntil();

$category = $dbhelper->select("select * from category");

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <title>Bootstrap Example</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
     <div class="container">
          <h2>Bordered Table</h2>
          <a class="btn btn-primary" href="add.php">Add category</a>
          <p></p>
          <table class="table table-bordered">
               <thead>
                    <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    foreach ($category as $index) {
                         echo "<tr>";
                         echo "<td>$index[id]</td>";
                         echo "<td>$index[name]</td>";
                         echo "<td>
                         <a class='btn btn-danger' href='delete.php?id=$index[id]'>Delete</a>
                         <a class='btn btn-success' href='update.php?id=$index[id]'>Update</a>
                         </td>";
                         echo "</tr>";
                    }
                    ?>
               </tbody>
          </table>
     </div>

</body>

</html>