<?php
if(!empty($_POST['delete'])) {
  //PDO
  $statement = $database->prepare("DELETE FROM name WHERE name_id = :name_id");
  $statement->bindParam(':name_id', $_POST['name-id']);
  $statement->execute();
  
  //MySQLi Object Oriented
  /*$statement = $database->prepare("DELETE FROM name WHERE name_id = ?");
  $statement->bind_param('i', $_POST['name-id']);
  $statement->execute();*/
  
  //MySQL Procedural
  /*$statement = mysqli_prepare($database, "DELETE FROM name WHERE name_id = ?");
  mysqli_stmt_bind_param($statement ,'i', $_POST['name-id']);
  mysqli_stmt_execute($statement);*/
}