<?php

session_start();
require __DIR__ . "/skripte/konekcijaBaze.php";

if (isset($_SESSION["korisnikID"])) { // Provera da li je korisnik ulogovan
        
    $upitKonekcije = "SELECT * FROM korisnik
            WHERE id = {$_SESSION["korisnikID"]}";
            
    $rezultat = $konekcija->query($upitKonekcije);
    
    $vrednost = $rezultat->fetch_assoc();


    $ukupnaCena = 0; // Inicijalizacija ukupne cene
    if (isset($_SESSION['korpa']) && !empty($_SESSION['korpa'])) {  // Provera da li korpa nije prazna
        foreach ($_SESSION['korpa'] as $proizvod) { // Prolazak kroz proizvode u korpi
            $ukupnaCena += $proizvod['cena'] * $proizvod['kolicina']; // Sabiranje ukupne cene
        }
    }
}
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



 < -- Glavni sadrzaj stranice i ispisivanje ukupne cene  -- >

    <div class="profilCeo">
    <?php if (isset($vrednost)): ?>
        <div class="korisnikProfil">
        <h3>Lični podaci</h3>
        <p><strong>Ime:</strong> <?php echo $vrednost['imeKorisnika'] ?></p>
        <p><strong>Prezime:</strong> <?php echo $vrednost['prezimeKorisnika'] ?></p>
        <p><strong>Email adresa:</strong> <?php echo $vrednost['emailKorisnika'] ?></p>
        <p><strong>Broj Telefona:</strong> <?php echo $vrednost['telefonKorisnika'] ?></p>
        <h3>Adresa</h3>
        <p><strong>Grad:</strong> <?php echo $vrednost['gradKorisnika'] ?></p>
        <p><strong>Ulica:</strong> <?php echo $vrednost['ulicaKorisnika'] ?></p>
        <p><strong>Broj Kuće:</strong> <?php echo $vrednost['brojUliceKorisnika'] ?></p>
        <p><strong>Država:</strong> <?php echo $vrednost['drzavaKorisnika'] ?></p>
        <br>
        <hr>
        <p><strong>Ukupna Cena:<?php echo $ukupnaCena ?> dinara</p>


            <div class="kupovina potvrdaKupi mrdniOpet">
                <a href="zahvalnica.php" class="btn btn-primary kupi">Potvrdite kupovinu</a>
            </div>
    </div>

    </div>

    </div>
    <?php endif; ?>


    <?php include 'includes/footerDole.php';?>


</body>
</html>
