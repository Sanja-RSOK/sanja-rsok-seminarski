<?php
// parametri za konekciju ka bazi podataka
$server = "localhost";
$korisnickoIme = "root";
$password ='';
$bazaPodataka ="dostava";
$port = 3306;

$konekcija = new mysqli($server,$korisnickoIme,$password,$bazaPodataka,$port);

?>