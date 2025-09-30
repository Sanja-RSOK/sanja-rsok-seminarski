<?php require 'skripte/funkcije.php' ?>

<?php

session_start();

if (isset($_GET['action']) && $_GET['action'] == 'remove') {
    $idProizvoda = $_GET['idProizvoda'];

    // Uklanjanje proizvoda iz sesije (korpe)
    if (isset($_SESSION['korpa'][$idProizvoda])) {
        unset($_SESSION['korpa'][$idProizvoda]);
    }

    // Preusmeravanje nazad na stranicu korpe
    header("Location: korpa.php");
    exit();
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


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <title>Mona | Korpa</title>
</head>
<body>
<?php include 'includes/navigacija.php';?>
  


    <div class="profilCeo">

    <div class="korisnikProfil tabelicaProfil dugme">
    <h3 style="text-align:center;">Vaša korpa</h3>
        <hr>
        <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Naziv Proizvoda</th>
                    <th>Količina</th>
                    <th>Cena po jedinici</th>
                    <th>Ukupna cena proizvoda</th>
                    <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                <tr>
    <?php 
    if (isset($_SESSION['korpa']) && !empty($_SESSION['korpa'])) { // Provera da li korpa nije prazna
        $ukupno = 0;
    ?>
        
        <?php         foreach ($_SESSION['korpa'] as $idProizvoda => $proizvod) { // Prolazak kroz proizvode u korpi
        $ukupnoPoProizvodu = $proizvod['kolicina'] * $proizvod['cena'];  // Pretpostavljamo da je $proizvod niz sa ključevima 'ime', 'cena', i 'kolicina'
        echo "<tr>";
        echo "<td>" . htmlspecialchars($proizvod['ime']) . "</td>";
        echo "<td>" . htmlspecialchars($proizvod['cena']) . " RSD</td>";
        echo "<td>" . htmlspecialchars($proizvod['kolicina']) . "</td>";
        echo "<td>" . $ukupnoPoProizvodu . " RSD</td>";
        echo "<td><a href='korpa.php?action=remove&idProizvoda=" . $idProizvoda . "' class='btn btn-danger'>Ukloni</a></td>";
        $ukupno += $ukupnoPoProizvodu;
    }
    ?>
    <?php } ?>
            </tbody>
        </table>

    </div>
</div>
<?php // Provera da li je korpa prazna
            if (empty($_SESSION['korpa'])): ?> 
                <div class="alert alert-warning kupovina" role="alert">
                    Korpa je prazna. Molimo dodajte proizvode pre nego što nastavite.
                </div>
            <?php else: ?>
                <div class="kupovina potvrdaKupi">
                    <a href="potvrda.php" class="btn btn-primary kupi">Potvrdite kupovinu</a>
                </div>
            <?php endif; ?>

</div>


    <?php include 'includes/footerDole.php';?>


</body>
</html>
