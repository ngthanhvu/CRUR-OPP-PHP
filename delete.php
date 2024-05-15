<?php
include_once "DBUntil.php";

$id = $_GET['id'];
var_dump($id);

$dbhelper = new DBUntil();

$category = $dbhelper->delete("category", "id = $id");

header("Location: index.php");


?>