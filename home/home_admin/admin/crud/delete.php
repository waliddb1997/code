<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM login WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: http://localhost/crud/crud/");
}