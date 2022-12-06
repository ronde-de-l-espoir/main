<?php
    include_once "./db.php";
    $result = mysqli_query($conn, 'SELECT SUM(amount_donated) AS value_sum FROM donations'); 
    $row = mysqli_fetch_assoc($result); 
    $sum = $row['value_sum'];
    echo $sum
?>