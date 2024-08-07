<?php
    if (!isset($big_display)) {
        require("../db_config.php");
    } else {
        require("../../db_config.php");
    }

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'SELECT SUM(real_amount) AS value_sum FROM donations'; // gets the total with about 10 decimals
    $results = mysqli_fetch_all(mysqli_query($conn, $sql));
    global $totalDonations;
    global $bareTotal;
    $bareTotal = $results[0][0];
    $totalDonations = intval($results[0][0]); // gets the intval of the total, this is like a floor

    $sql = 'SELECT COUNT(id) as count_participants FROM donations'; // get number of participants
    $results = mysqli_fetch_all(mysqli_query($conn, $sql));

    global $totalParticipants;
    $totalParticipants = $results[0][0];

?>