<?php

session_start();
?>
<?php require 'skripte/funkcije.php' ?>


<!DOCTYPE html>
<html lang="srb">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mona | Srbija - Najbolji sajt za prodaju odece za sve uzraste">
    <meta name="keywords" content="moda, odeca, stvari, jakne, majice, haljine, mona, zene, muskarci, pantalone">
    <meta name="author" content="Sanja Pavicevic">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/glavni.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/profil.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <title>Mona | Profil</title>
</head>
<body>
<?php include 'includes/navigacija.php';?>



    <div class="profilCeo">
        <div class="korisnikProfil">
        <h3>Kupovina obavljena!</h3>
        <p>Hvala vam na obavljenoj kupovini.</p> 
        <div class="mrdni"><a href="skripte/korpaUnisti.php" class="btn btn-primary kupi">Vratite se na početnu stranicu</a>

    </div>
    </div>

    </div>


    <?php include 'includes/footerDole.php';?>


</body>
</html>
