<?php
    include_once "./db.php";
    $sql = 'SELECT SUM(amount_donated) AS value_sum FROM donations';
    $stm = $pdo->query($sql);
    $result = $stm->fetch();
    echo $result[0];
?>