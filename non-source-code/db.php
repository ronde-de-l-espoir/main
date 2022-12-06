<?php
    $servername = "localhost";
    $username = "***REMOVED***";
    $password = "***REMOVED***";
    $database = "***REMOVED***_donations";
    $port = "3306";
    $connection = mysqli_connect($servername, $username, $password, $port);
    mysqli_select_db($connection, $database);
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connnection->connect_error);
    }
?>