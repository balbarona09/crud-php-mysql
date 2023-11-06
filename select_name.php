<?php
//PDO
$statement = $database->prepare("SELECT name_id, lastname, firstname, middlename, suffix 
FROM name");
$statement->execute();
$record = $statement->fetchAll();

//MySQLi Object Oriented
/*$statement = $database->prepare("SELECT name_id, lastname, firstname, middlename, suffix 
FROM name");
$statement->execute();
$record = $statement->get_result()->fetch_all(MYSQLI_ASSOC);*/

//MySQLi Procedural
/*$statement = mysqli_prepare($database, "SELECT name_id, lastname, firstname, middlename, suffix 
FROM name");
mysqli_stmt_execute($statement);
$record = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);*/