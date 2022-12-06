<?php
    $servername = "localhost";
    $username = "ctzs1179";
    $password = "o2switch2022";
    $database = "ctzs1179_donations";
    $port = "3306";
    $connection = new mysqli($servername, $username, $password, $database, $port);
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connnection->connect_error);
    }
?>