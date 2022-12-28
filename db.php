<?php
    // $dsn = "mysql:host=ronde-de-l-espoir.fr;dbname=***REMOVED***_donations";
    // $user = "***REMOVED***";
    // $passwd = "***REMOVED***";

    // try { 
    //     $pdo = new PDO($dsn, $user, $passwd);
    // } catch (PDOException $e) {
    //     echo $e;
    //     die();
    // }

    $servername = "ronde-de-l-espoir.fr";
    $username = "***REMOVED***";
    $password = "***REMOVED***";
    $dbname = "***REMOVED***_donations";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Operation is a success.";
?>