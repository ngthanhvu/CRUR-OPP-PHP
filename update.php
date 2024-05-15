<?php
include_once "DBUntil.php";
$dbhelper = new DBUntil();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $id = $_POST['id'];
     $name = $_POST['name'];

     $data = array(
          "id" => $id,
          "name" => $name
     );

     $result = $dbhelper->update("category", $data, "id = :id");
     // Chuyển hướng về trang chủ
     header("Location: index.php");
     exit();
}
?>

<!DOCTYPE html>
<html>

<head>
     <title>Update sản phẩm</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
     <br><br><br>
     <div class="container">
          <form action="update.php" method="POST">
               <div class="mb-3 mt-3">
                    <label class="form-label" for="name">Id sản phẩm:</label>
                    <input class="form-control" type="text" id="id" name="id" value="<?php echo $_GET['id']; ?>">
               </div>
               <div class="mb-3 mt-3">
                    <label class="form-label" for="name">Tên sản phẩm:</label>
                    <input class="form-control" type="text" id="name" name="name">
               </div>
               <button class="btn btn-primary" type="submit">Update</button>
          </form>
     </div>
</body>

</html>