<?php
include_once "DBUntil.php";
$dbhelper = new DBUntil();
# thêm catteogry
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $name = $_POST['name'];
     
     $data = ['name' => $name];
     $dbhelper->insert('category', $data);

     header("Location: index.php");
     exit;
}

?>

<!DOCTYPE html>
<html>

<head>
     <title>Thêm sản phẩm</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
     <br><br><br>
     <div class="container">
          <form action="add.php" method="POST">
               <div class="mb-3 mt-3">
                    <label class="form-label" for="name">Tên sản phẩm:</label>
                    <input class="form-control" type="text" id="name" name="name">
               </div>
               <button class="btn btn-primary" type="submit">Thêm</button>
          </form>
     </div>
</body>

</html>