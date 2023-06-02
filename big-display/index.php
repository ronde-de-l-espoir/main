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
    <script src="./lib/odometer/odometer.min.js"></script>
    <link rel="stylesheet" href="./lib/odometer/odometer-theme-default.css">
    <script>
        window.odometerOptions = {
            auto: true,
            // selector: '.totalDisplay',
            // duration: '3000',
            // animation: 'count'
            format: '( ddd),dd'
        }
        setTimeout(function(){
            var total = <?php echo $totalDonations;?>;
            odometer.innerHTML = total;
        }, 1);
    </script>
    <title>Big Display</title>
</head>
<body>
    
    <main>
        <div class="main-wrapper">

            <div id="counter">
                <div class="count-box">
                    <div class="totalDisplay">
                        <div class="odometer" id="odometer" style="display: inline-block;" ></div>
                        <div style="font-size: 70%; position: relative; padding-left: -10px; display: inline; top: -20px">€</div>
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