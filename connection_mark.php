<?php
  $dbhost = 'localhost';
  $dbname = 'marker';
  $dbchar = 'utf8';
  $dbuser = 'root';
  $dbpass = '';

  $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ];

  try {

    $host = "mysql:host={$dbhost};dbname={$dbname};charset={$dbchar}";
    $dbcon = new PDO($host, $dbuser, $dbpass, $options);

    echo "C-Successfully  ";

  } catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
  }

?>