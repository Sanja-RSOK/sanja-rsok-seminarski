<?php

require_once('skripte/konekcijaBaze.php');
session_start();

$sqlUcitavanjeUpit = "SELECT * FROM proizvod WHERE tipProizvoda= 'novcanik' ";
$sviNovcanici = $konekcija->query($sqlUcitavanjeUpit);

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
    <link rel="stylesheet" href="css/odecaPick.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <title>Mona | Novčanici</title>
</head>
<body>
<?php include 'includes/navigacija.php';?>



<div class="profilCeo">

<?php
    foreach($sviNovcanici as $novcanici){
?>

<div class="kategorije">
<a href="proizvod.php?imeProizvoda=<?php echo urlencode($novcanici['imeProizvoda']) ?>">
<h1><?php echo $novcanici["imeProizvoda"] ?></h1>
    <hr>
    <img src="<?php echo $novcanici["slika"] ?>" class="slikaOdeca" alt="">
    <hr>
    <p>Cena: <?php echo $novcanici["cenaProizvoda"]?> dinara</p>
</a>
</div>

<?php
    }
?>
</div>
    <?php include 'includes/footerDole.php';?>


</body>

</html>
