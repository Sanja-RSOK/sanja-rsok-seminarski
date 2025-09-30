<?php require "skripte/funkcije.php" ?>
<?php

session_start();
$proizvod = null;

    if (isset($_GET['imeProizvoda'])) {
        $imeProizvoda = urldecode($_GET['imeProizvoda']);
        $proizvod = getProizvodPoImenu($imeProizvoda);
    }

    if (isset($_POST['uKorpuDodaj'])) {
        $idProizvoda = $_POST['idProizvoda'];
        $imeProizvoda = $_POST['imeProizvoda'];
        $cenaProizvoda = $_POST['cenaProizvoda'];
        $kolicina = $_POST['kolicina'];
    
        // Ako korpa još ne postoji, kreiraj je
        if (!isset($_SESSION['korpa'])) {
            $_SESSION['korpa'] = [];
        }
    
        // Ako proizvod već postoji u korpi, uvećaj količinu
        if (isset($_SESSION['korpa'][$idProizvoda])) {
            $_SESSION['korpa'][$idProizvoda]['kolicina'] += $kolicina;
        } else {
            // Ako proizvod ne postoji, dodaj ga u korpu
            $_SESSION['korpa'][$idProizvoda] = [
                'ime' => $imeProizvoda,
                'cena' => $cenaProizvoda,
                'kolicina' => $kolicina
            ];
        }
    }

    if(!isset($_SESSION['korisnikID']))
    {
        $link = "login.php";
        $prvoSeUloguj = "login.php";
    }

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
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/proizvod.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <title>Mona | <?php echo htmlspecialchars($proizvod['imeProizvoda']) ?></title>
</head>
<body>
<?php include 'includes/navigacija.php';?>
  

    <div class="profilCeo">

    <div class="korisnikProfil">
        <img src="<?php echo "{$proizvod['slika']}"; ?>" alt="" class="slikaProizvoda">
    </div>

    <div class="korisnikProfil">
        <h1><?php echo htmlspecialchars($proizvod['imeProizvoda']); ?></h1>
        <h3><?php echo htmlspecialchars($proizvod['cenaProizvoda']); ?>.00 dinara
        <hr>
        <p><strong>Šifra artikla:&nbsp </strong><?php echo htmlspecialchars($proizvod['sifra']); ?></p>
        <p><strong>Kategorija:&nbsp </strong><?php echo htmlspecialchars($proizvod['kategorija']); ?></p>
        <p><strong>Pol:&nbsp </strong><?php echo htmlspecialchars($proizvod['pol']); ?></p>
        <p><strong>Boja:&nbsp </strong><?php echo htmlspecialchars($proizvod['boja']); ?></p>
        <hr>
        
        <h3>Naruči:</h3>

        <?php   if(isset($_SESSION['korisnikID'])): ?>
    <form method="post" action="">
        <label for="kolicina">Količina:</label>
        <input type="number" id="kolicina" name="kolicina" value="1" min="1" max="99" placeholder="Količina:" required>
        <input type="hidden" name="idProizvoda" value="<?php echo htmlspecialchars($proizvod['id']); ?>">
        <input type="hidden" name="imeProizvoda" value="<?php echo htmlspecialchars($proizvod['imeProizvoda']); ?>">
        <input type="hidden" name="cenaProizvoda" value="<?php echo htmlspecialchars($proizvod['cenaProizvoda']); ?>">
        <button type="submit" name="uKorpuDodaj" class="naruci">Dodaj u korpu</button>
        <?php else: ?>

        <a href="login.php" class="btn btn-primary"name="uKorpuDodaj" class="naruci">Prijavi se za kupovinu</a>
    
        <?php endif; ?>
    </form>
    </div>
    </div>
    <?php include 'includes/footerDole.php';?>


</body>
</html>
