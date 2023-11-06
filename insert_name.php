<?php
if(!empty($_POST['insert'])) {
  //PDO
  $statement = $database->prepare("INSERT INTO name (lastname, firstname, middlename, suffix) 
  VALUES (:lastname, :firstname, :middlename, :suffix) ");
  $statement->bindParam(':lastname', $_POST['lastname']);
  $statement->bindParam(':firstname', $_POST['firstname']);
  $statement->bindParam(':middlename', $_POST['middlename']);
  $statement->bindParam(':suffix', $_POST['suffix']);
  $statement->execute();
  
  //MySQLi Object Oriented
  /*$statement = $database->prepare("INSERT INTO name (lastname, firstname, middlename, suffix) 
  VALUES (?, ?, ?, ?) ");
  $statement->bind_param("ssss", $_POST['lastname'], $_POST['firstname'], $_POST['middlename'], $_POST['suffix']);
  $statement->execute();*/
  
  //MySQLi Procedural
  /*$statement = mysqli_prepare($database, "INSERT INTO name (lastname, firstname, middlename, suffix) 
  VALUES (?, ?, ?, ?) ");
  mysqli_stmt_bind_param($statement, "ssss", $_POST['lastname'], $_POST['firstname'], $_POST['middlename'], $_POST['suffix']);
  mysqli_stmt_execute($statement);*/
}