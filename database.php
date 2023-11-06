<?php
$host = 'localhost';
$dbname = 'crud';
$user = 'root';
$password = '';

//PDO
$database = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

//MySQLi Object Oriented
//$database = new mysqli($host, $user, $password, $dbname);

//MySQLi Procedural
//$database = mysqli_connect($host, $user, $password, $dbname);