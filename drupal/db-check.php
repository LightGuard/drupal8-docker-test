<?php
  try { 
    $DBH = new PDO("mysql:host=$_ENV[DRUPALMYSQL_PORT_3306_TCP_ADDR];dbname=$_ENV[DB_NAME]", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']); 
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
  } catch(PDOException $e) { 
    exit(1); 
  }
?>

