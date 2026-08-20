<?php
// Získání textu z formuláře
$text = $_POST['text'];

// Cesta k souboru
$soubor = "muj_soubor.txt";

// Zapisujeme pouze při odeslání formuláře
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents($soubor, $text);
    echo "Text byl úspěšně uložen do souboru.";
} else {
    // Čteme obsah souboru a zobrazujeme ho v textarea
    $obsah_souboru = file_get_contents($soubor);
    echo "<textarea name='text' rows='10' cols='50'>$obsah_souboru</textarea>";
}
?>