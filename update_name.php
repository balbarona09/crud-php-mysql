<?php
if(!empty($_POST['update'])) {
  //PDO
  $statement = $database->prepare("UPDATE name SET lastname = :lastname, 
  firstname = :firstname, middlename = :middlename, suffix = :suffix 
  WHERE name_id = :name_id");
  $statement->bindParam(':lastname', $_POST['lastname']);
  $statement->bindParam(':firstname', $_POST['firstname']);
  $statement->bindParam(':middlename', $_POST['middlename']);
  $statement->bindParam(':suffix', $_POST['suffix']);
  $statement->bindParam(':name_id', $_POST['name-id']);
  $statement->execute();
  
  //MySQLi Object Oriented
  /*$statement = $database->prepare("UPDATE name SET lastname = ?, 
  firstname = ?, middlename = ?, suffix = ? WHERE name_id = ?");
  $statement->bind_param("ssssi", $_POST['lastname'], $_POST['firstname'], 
  $_POST['middlename'], $_POST['suffix'], $_POST['name-id']);
  $statement->execute();*/
  
  //MySQLi Procedural
  /*$statement = mysqli_prepare($database, "UPDATE name SET lastname = ?, 
  firstname = ?, middlename = ?, suffix = ? WHERE name_id = ?");
  mysqli_stmt_bind_param($statement, "ssssi", $_POST['lastname'], $_POST['firstname'], 
  $_POST['middlename'], $_POST['suffix'], $_POST['name-id']);
  mysqli_execute($statement);*/
}