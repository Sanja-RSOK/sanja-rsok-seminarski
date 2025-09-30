<?php
    // Skripta za odjavu korisnika
    session_start();
    session_destroy();
    if (isset($_SESSION['korpa'])) {
        unset($_SESSION['korpa']);
    }
    header("Location: ../index.php");
    exit;
