<?php require 'skripte/funkcije.php' ?>

<?php

session_start();

?>

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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <title>Mona | Shop</title>
</head>
<body>

<?php include 'includes/navigacija.php';?>
<?php include 'skripte/konekcijaBaze.php';?>



    <div class="bannerSlajder">

<div class="lista-slika" id="lista-slika">
    <img src="slike/banner1.jpg"  alt="">
    <img src="slike/banner2.jpg"  alt="">
    <img src="slike/banner3.jpg"  alt="">

</div>
<div class="slajder-dugme">

    <div class="pos-dugme" onclick="pomeriSliku(0)"></div>
    <div class="pos-dugme" onclick="pomeriSliku(1)"></div>
    <div class="pos-dugme" onclick="pomeriSliku(2)"></div>

</div>
</div>

<div class="izabrano">
    <h3>ISTRAŽITE NEŠTO NOVO:</h3>
    <?php 
    // Poziv funkcije za dobijanje 5 nasumičnih proizvoda koja je uvezena na vrhu stranice
    $produkti = randomProizvodi(5); ?> 

    <div class="produktiSlajder">

        <div class="produktiLista">

        <?php 
        
        foreach ($produkti as $produkt)
        { ?>

            <div class="produktiPosebno">

         <a href="proizvod.php?imeProizvoda=<?php echo urlencode($produkt['imeProizvoda']); ?>">
         <img src="<?php echo $produkt["slika"] ?>" class="slikeProdukta" alt="">

         <h2><?php echo $produkt['imeProizvoda'];?></h2>
         <p><?php echo $produkt['cenaProizvoda'];?> dinara</p>
         </a>

            </div> 

            <?php
        }
        
        ?>
        </div>

    </div>
</div>
    

<script src="skripte/slajder.js"></script>


<?php include 'includes/footerDole.php';?>

</html>
