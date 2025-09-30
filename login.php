<?php require 'skripte/funkcije.php' ?>

<?php 

    /* 
    za testiranje koristiti login 
    email: admin@admin@gmail.com
    lozinka: admin123456
    */



    // promenljiva koja ce da proveri da li je login validan
    // ako nije validan prikazace se poruka o gresci
    $daLiJeLoginValidan = false;

    if($_SERVER["REQUEST_METHOD"] === "POST") // Proverava da li je forma poslata metodom POST
    {
        require __DIR__ . "/skripte/konekcijaBaze.php";
        // __DIR__ učitava lokaciju gde se fajl nalazi onaj u kome pišemo trenutni kod

        $sqlUpit = sprintf("SELECT * FROM korisnik
                          WHERE emailKorisnika = '%s' ",$konekcija->real_escape_string($_POST["emailLogin"]));

        $rezultatUpita = $konekcija->query($sqlUpit);
        $korisnik = $rezultatUpita->fetch_assoc();

        if($korisnik) // ako je korisnik pronadjen u bazi podataka 
                      // znaci da je email unet ispravno
        {
            $lozinka = $_POST["lozinkaLogin"];

            if(password_verify($lozinka, $korisnik["lozinkaKorisnika"])) // za ucitavanje hashpassworda koristimo ime kolone iz baze podataka (lozinkaKorisnika)    
            {

                session_start();
                $_SESSION["korisnikID"] = $korisnik["id"]; // globalna promenljiva sesije korisnikID dobija vrednost id-a iz baze kojoj smo uzeli podatke i postavili u promenljivu $korisnik iz tabele "korisnik"

                header("Location: index.php");
                exit();
            }       
        }
        $daLiJeLoginValidan = true;
        
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
    <link rel="stylesheet" href="css/loginReg.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <title>Mona | Login</title>
</head>
<body>
<?php include 'includes/navigacija.php';?>


<div class="profilCeo">

<h3>Prijavite se na vaš nalog</h3>


<?php  if($daLiJeLoginValidan):  ?>
    <p style="text-align:center; color:red;"><i>Uneti podaci nisu tačni!</i></p>
<?php endif; ?>

<hr>
<form class="loginReg " id="login" method="POST">


<label for="email">E-mail:</label>
<input type="email" id="email" name="emailLogin" placeholder="Unesite vašu email adresu:" required>

<label for="lozinka">Lozinka:</label>
<input type="password" id="lozinka" name="lozinkaLogin" placeholder="Unesite vašu lozinku:" required>

<button type="submit">Prijava</button>
<a class="nemateNalog" href="register.php">Nemate nalog? Registrujte se</a>
</form>

</div>

</body>

<footer>
    <p>©2025 Sanja Pavićević | Sva prava zadržana.</p>
</footer>

</html>
