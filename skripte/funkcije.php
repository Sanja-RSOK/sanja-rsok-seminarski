<?php

    function konektujBazu() // Funkcija za konekciju sa bazom podataka
    {
        $server = "localhost";
        $korisnickoIme = "root";
        $password ="";
        $bazaPodataka ="dostava";
        
        $konekcija = new mysqli($server,$korisnickoIme,$password,$bazaPodataka);

        return $konekcija;
    }

    function getProizvodPoImenu($imeProizvoda)
    {
        $konekcija = konektujBazu();
    
        if ($konekcija === FALSE) {
            return NULL;  // Vraća NULL ako je došlo do greške pri konekciji
        }
    
        $poziv = $konekcija->prepare("SELECT * FROM proizvod WHERE imeProizvoda = ?");
        $poziv->bind_param("s", $imeProizvoda);
        $poziv->execute();
        $rezultat = $poziv->get_result();
    
        if ($rezultat->num_rows > 0) {
            return $rezultat->fetch_assoc();  // Vraća samo jedan proizvod
        } else {
            return null;  // Ako nema rezultata
        }
    }
    

    function randomProizvodi($pocetnaProizvodi) {
        $konekcija = konektujBazu();
        $rezultat = $konekcija->query("SELECT * FROM proizvod ORDER BY rand() LIMIT $pocetnaProizvodi");
    
        $podaci = []; // Inicijalizacija praznog niza
        while($red = $rezultat->fetch_assoc()) {
            $podaci[] = $red;
        }
    
        return $podaci;
    }

