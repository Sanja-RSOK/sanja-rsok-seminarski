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
    <link rel="stylesheet" href="css/loginReg.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


    <title>Mona | Registracija</title>
</head>
<body>
<?php include 'includes/navigacija.php';?>


<div class="profilCeo">

<h3>Registrujte novi nalog!</h3>

<hr>
<form class="loginReg" action="skripte/registerLogika.php" method="POST" id="registracija" novalidate>

<label for="imeRegister">Ime:</label>
<input type="text" id="imeRegister" name="imeRegister" placeholder="Unesite vaše ime:">

<label for="prezimeRegister">Prezime:</label>
<input type="text" id="prezimeRegister" name="prezimeRegister" placeholder="Unesite vaše prezime:">

<label for="emailRegister">E-mail:</label>
<input type="email" id="emailRegister" name="emailRegister" placeholder="Unesite vašu email adresu:">

<label for="lozinkaRegister">Lozinka:</label>
<input type="password" id="lozinkaRegister" name="lozinkaRegister" placeholder="Unesite vašu lozinku:">

<label for="telefonRegister">Telefon</label>
<input type="text" id="telefonRegister" name="telefonRegister" placeholder="Unesite vaš broj telefona:">

<label for="gradRegister">Grad</label>
<input type="text" id="gradRegister" name="gradRegister" placeholder="Unesite vaš grad:">

<label for="ulicaRegister">Ulica</label>
<input type="text" id="ulicaRegister" name="ulicaRegister" placeholder="Unesite vašu ulicu:">

<label for="kucniBrojRegister">Broj kućnih vrata</label>
<input type="text" id="kucniBrojRegister" name="kucniBrojRegister" placeholder="Unesite vaš broj kućnih vrata:">

<label for="drzavaRegister">Država</label>
<input type="text" id="drzavaRegister" name="drzavaRegister" placeholder="Unesite vašu državu:">


<button type="submit">Registracija</button>
<a class="nemateNalog" href="login.php">Već posedujete nalog? Prijavite se</a>

</form>

</div>

</body>

<footer>
    <p>©2025 Sanja Pavićević | Sva prava zadržana.</p>
</footer>
</html>
