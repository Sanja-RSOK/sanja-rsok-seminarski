<?php

//validacija imena i prezimena
if(empty($_POST['imeRegister']))
{
    die("Unesite vaše ime!");
}

if(preg_match("/[0-9]/i", $_POST['imeRegister']))
{
    die("Vaš ime mora sadržati samo slova");
}

if(empty($_POST['prezimeRegister']))
{
    die("Unesite vaše prezime!");
}


if(preg_match("/[0-9]/i", $_POST['prezimeRegister']))
{
    die("Vaš prezime mora sadržati samo slova");
}


// validacija telefona
if(empty($_POST['telefonRegister']))
{
    die("Unesite vaš telefon!");
}

if(preg_match("/[a-z]/i", $_POST['telefonRegister']))
{
    die("Vaš telefon mora sadržati samo brojeve");
}


//validacija email adrese
if(! filter_var($_POST['emailRegister'],FILTER_VALIDATE_EMAIL))
{
    die("Unesite validnu email adresu!");
}


//validacija lozinke
if(strlen($_POST["lozinkaRegister"])<8)
{
    die("Lozinka mora sadržati minimum 8 karaktera!");
}
if(! preg_match("/[a-z]/i", $_POST['lozinkaRegister']))
{
    die("Lozinka mora sadržati barem jedno slovo!");
}
if(! preg_match("/[0-9]/i", $_POST['lozinkaRegister']))
{
    die("Lozinka mora sadržati barem jedan broj!");
}

//validacija broja kuce
if(empty($_POST['kucniBrojRegister']))
{
    die("Unesite broj vaših kućnih vrata!");
}

if(preg_match("/[a-z]/i", $_POST['kucniBrojRegister']))
{
    die("Broj vaših kućnih vrata mora sadržati samo brojeve");
}


// validacija grada i ulice

if(empty($_POST['gradRegister']))
{
    die("Unesite ime vašeg grada!");
}

if(preg_match("/[0-9]/i", $_POST['gradRegister']))
{
    die("Ime vašeg grada mora sadržati samo slova");
}

if(empty($_POST['ulicaRegister']))
{
    die("Unesite broj vaše ulice!");
}


if(preg_match("/[0-9]/i", $_POST['ulicaRegister']))
{
    die("Ime vaše ulice mora sadržati samo slova");
}

//validacija države
if(empty($_POST['drzavaRegister']))
{
    die("Unesite ime vaše države!");
}

if(preg_match("/[0-9]/i", $_POST['drzavaRegister']))
{
    die("Ime vaše države mora sadržati samo slova");
}

$sifrovanaLozinka = password_hash($_POST["lozinkaRegister"],PASSWORD_DEFAULT);

//importovanje baze

require __DIR__ . "/konekcijaBaze.php";

// sql upit za unos podataka u bazu
$upitZaUnos = "INSERT INTO korisnik (imeKorisnika, prezimeKorisnika, emailKorisnika, lozinkaKorisnika, telefonKorisnika, gradKorisnika, ulicaKorisnika, brojUliceKorisnika, drzavaKorisnika) VALUES (?,?,?,?,?,?,?,?,?)";

$stmt = $konekcija->stmt_init();
$stmt->prepare($upitZaUnos);

//provera email adrese

$proveraEmaila = "SELECT emailKorisnika FROM korisnik WHERE emailKorisnika = ?";
$stmtProvera = $konekcija->prepare($proveraEmaila);
$stmtProvera->bind_param("s", $_POST['emailRegister']);
$stmtProvera->execute();
$stmtProvera->store_result();

if($stmtProvera ->num_rows > 0)

{
    die("Email već postoji");
}
else
{
    
    // vezivanje parametara i izvrsavanje upita
$stmt -> bind_param("sssssssss",
$_POST['imeRegister'],
$_POST['prezimeRegister'],
$_POST['emailRegister'],
$sifrovanaLozinka,
$_POST['telefonRegister'],
$_POST['gradRegister'],
$_POST['ulicaRegister'],
$_POST['kucniBrojRegister'],
$_POST['drzavaRegister']);

    if($stmt -> execute())
    {
        header("Location: ../login.php");
        exit;
    }


}