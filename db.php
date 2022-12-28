<?php
    // $dsn = "mysql:host=ronde-de-l-espoir.fr;dbname=ctzs1179_donations";
    // $user = "ctzs1179";
    // $passwd = "o2switch2022";

    // try { 
    //     $pdo = new PDO($dsn, $user, $passwd);
    // } catch (PDOException $e) {
    //     echo $e;
    //     die();
    // }

    $servername = "ronde-de-l-espoir.fr";
    $username = "ctzs1179";
    $password = "o2switch2022";
    $dbname = "ctzs1179_donations";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Operation is a success.";
?>