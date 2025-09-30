<?php
// Skripta za brisanje korpe
session_start();
if (isset($_SESSION['korpa'])) {
    unset($_SESSION['korpa']);
}

header("Location: ../index.php");
exit;