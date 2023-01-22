<?php

    require("../db_config.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'SELECT SUM(amount_donated) AS value_sum FROM donations';
    $results = mysqli_fetch_all(mysqli_query($conn, $sql));
    global $totalDonations;
    $totalDonations = round($results[0][0], 2);

    $totalDonations = sprintf("%.2f", $totalDonations);

    for ($i = 0; $i < strlen($totalDonations); $i++ ) {
        if ($totalDonations[$i] == ".") {
            $totalDonations[$i] = ",";
        }
    }

    $sql = 'SELECT COUNT(id) as count_participants FROM donations';
    $results = mysqli_fetch_all(mysqli_query($conn, $sql));

    global $totalParticipants;
    $totalParticipants = $results[0][0];

?>
