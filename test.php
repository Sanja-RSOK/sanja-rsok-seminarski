<?php include 'skripte/konekcijaBaze.php';

    if(isset($_POST['dodajProizvod']))
    {
        $sifraProizvoda = $_POST['sifraProizvoda'];
        $cenaProizvoda = $_POST['cenaProizvoda'];
        $kategorijaProizvoda = $_POST['kategorijaProizvoda'];
        $polProizvoda = $_POST['polProizvoda'];
        $imeProizvoda = $_POST['imeProizvoda'];
        $bojaProizvoda = $_POST['bojaProizvoda'];
        $tipProizvoda = $_POST['tipProizvoda'];

        $slikaFolder = "produkti/";
        $slikaProizvoda = $slikaFolder.$_FILES["slikaProizvoda"]["name"];

        $slikaFolder.$_FILES["slikaProizvoda"]["name"];
        $slikaPostavljanje = $slikaFolder.basename($_FILES["slikaProizvoda"]["name"]);
        $imageType = strtolower(pathinfo($slikaPostavljanje,PATHINFO_EXTENSION));



        $unesiUpit = mysqli_query($konekcija, "insert into `proizvod` (cenaProizvoda,imeProizvoda,sifra,kategorija,pol,boja,slika,tipProizvoda) values ('$cenaProizvoda','$imeProizvoda','$sifraProizvoda', '$kategorijaProizvoda', '$polProizvoda', '$bojaProizvoda','$slikaProizvoda','$tipProizvoda')") or die("Neuspešan unos!");

        if($unesiUpit)
        {
            move_uploaded_file($_FILES["slikaProizvoda"]["tmp_name"], $slikaPostavljanje);
            echo "uspesno!";
        }
        else{
            echo "neuspesno!";
        }
        $konekcija->close();
        header('Location: test.php'); // Redirekcija
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


    <title>Mona | Profil</title>
</head>
<body>
<?php include 'includes/navigacija.php';?>

    <div class="profilCeo">

    <div class="korisnikProfil">

    <form action="" method="POST" class="" enctype="multipart/form-data">
        <input type="number" name="sifraProizvoda" placeholder="unesi sifru proizvoda" required>
        <input type="number" name="cenaProizvoda" placeholder="unesi cenu proizvoda" min="0" required>
        <input type="text" name="kategorijaProizvoda" placeholder="unesi kategoriju proizvoda" required>
        <input type="text" name="polProizvoda" placeholder="unesi pol proizvoda" required>
        <input type="text" name="imeProizvoda" placeholder="unesi imeProizvoda proizvoda" required>
        <input type="text" name="bojaProizvoda" placeholder="unesi boju proizvoda" required>
        <input type="text" name="tipProizvoda" placeholder="unesi tip proizvoda" required >
        <input type="file" name="slikaProizvoda" placeholder="unesi sliku proizvoda" required accept="image/png, image/jpg, image/jpeg">

        <br>
        <input type="submit" name="dodajProizvod" value="dodajProizvod"></input>
    </form>

    </div>

    </div>
    <?php include 'includes/footerDole.php';?>


</body>
</html>
