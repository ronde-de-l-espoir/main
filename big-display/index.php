<?php
    $big_display = true;
    require('../get_total.php')
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../count-box.css">
    <link rel="stylesheet" href="../common.css">
    <link rel="stylesheet" href="../accueil-style.css">
    <title>Big Display</title>
</head>
<body>
    
    <main>
        <div class="main-wrapper">

            <div id="counter">
                <div class="count-box">
                    <div class="totalDisplay">
                        <div class="totalDisplay"><?php echo $totalDonations ?>€</div>
                    </div>
                    <p id="more-infos">ont été récoltés pour la Ronde de l'Espoir !</p>
                </div>
                <div style="visibility: hidden; padding: 5px;"></div>
                <p class="peopleInfos">Déjà <span id="peopleTotal"><?php echo $totalParticipants ?></span> participants ! Qu'attendez-vous ?</p>
            </div>

        </div>

        
    </main>

</body>
</html>