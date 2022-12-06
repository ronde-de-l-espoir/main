<?php
    $servername = "localhost";
    $username = "***REMOVED***";
    $password = "***REMOVED***";
    $database = "***REMOVED***_donations";
    $port = "3306";
    $connection = new mysqli($servername, $username, $password, $database, $port);
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connnection->connect_error);
    }
?>