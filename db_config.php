<?php

    $servername = "ronde-de-l-espoir.fr";
    $username = "ctzs1179";
    $password = "o2switch2022";
    $dbname = "ctzs1179_donations";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'SELECT SUM(amount_donated) AS value_sum FROM donations';
    $results = mysqli_fetch_all(mysqli_query($conn, $sql));
    $totalDonations = round($results[0][0], 2);
    
    $totalDonations = sprintf("%.2f", $totalDonations);

    for ($i = 0; $i < strlen($totalDonations); $i++ ) {
        if ($totalDonations[$i] == ".") {
            $totalDonations[$i] = ",";
        }
    }

?>