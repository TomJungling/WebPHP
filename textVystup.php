<?php require "header.php"; ?>

<?php
// Cesta k souboru
$soubor = "muj_soubor.txt";
 {
    // Čteme obsah souboru do řetězce
    $obsah_souboru = file_get_contents($soubor);
    echo $obsah_souboru;
}
?>

<?php require "footer.php"; ?>