<?php
    require("../db_config.php");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'SELECT SUM(real_amount) AS value_sum FROM donations';
    $results = mysqli_fetch_all(mysqli_query($conn, $sql));
    global $totalDonations;
    global $bareTotal;
    $bareTotal = $results[0][0];
    $totalDonations = intval($results[0][0]);

    $sql = 'SELECT COUNT(id) as count_participants FROM donations';
    $results = mysqli_fetch_all(mysqli_query($conn, $sql));

    global $totalParticipants;
    $totalParticipants = $results[0][0];

?>