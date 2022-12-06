<?php
    $servername = "ronde-de-l-espoir.fr";
    $username = "ctzs1179";
    $password = "o2switch2022";
    $connection = new mysqli($servername, $username, $password);
    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $connnection->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ronde de l'Espoir</title>
    <link rel="shortcut icon" href="img/LRDE-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">
    <script src="app.js" defer></script>
</head>
<body>

    <header>
        <div class="title">
            <h1><a href="">La Ronde de l'Espoir</a></h1>
        </div> <!-- Ne pas changer le lien au-dessus, il fonctionne comme il   -->

        <nav>
            <div class="nav-wrapper">
                <img src="img/logo_littoral.png" alt="Logo La Merci Littoral" onclick="javascript:window.location='https://lamerci.com/littoral/accueil';">
                <div class="link-wrapper">
                    <a href="#" class="underline-anim" data-isFocus="true">Accueil</a>
                    <a href="./infos/" class="underline-anim" data-isFocus="false">Infos</a>
                    <a href="#" class="underline-anim" data-isFocus="false">Galerie</a>
                    <a href="./donation/" id="donate-btn" data-isFocus="false">Faire un don</a>  <!-- C'est plus pratique de rajouter un "./" devant les liens. -->
                </div>
            </div>
        </nav>
        <div class="future-burger-menu"></div>
        
    </header>
    

    <main>
        <div class="count-box">
            <p>hello</p>
            <?php
                $sql = "SELECT SUM(`amount_donated`) FROM `donations`";
                $result = ($conn->query($sql));
                //declare array to store the data of database
                $row = mysqli_fetch_assoc($result); 
                $sum = $row['totalsum'];
                echo ("This is the sum: $sum");
            ?>
            
        </div>
    </main>


    <footer>
    </footer>
</body> 
</html>