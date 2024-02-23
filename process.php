<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h2>Elaborazione dei dati</h2>

    <?php
    // Verifico se la richiesta è stata inviata tramite il metodo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Verifico se ho ricevuto tutto
        if (isset($_POST['paragraph']) && isset($_POST['word'])) {

            // Paragrafo e parola da censurare
            $paragraph =  $_POST['paragraph'];
            $word = $_POST['word'];

            // Stampo il paragrafo e la sua lunghezza
            echo "<p>Paragrafo: $paragraph</p>";
            echo "<p>Lunghezza paragrafo:" . strlen($paragraph) ."</p>";

            // Conta quante volte la parola da censurare appare nel paragrafo
            $word_count = substr_count(strtolower($paragraph), strtolower($word));

            // Calcola la lunghezza del paragrafo censurato
            $censored_length = strlen($paragraph) - (strlen($word) * $word_count);

            // Sostituisco tutte le parole da censurare con ***
            $censored_paragraph = str_ireplace($word, '***', $paragraph);

            // Stampo il paragrafo censurato e la sua lunghezza
            echo "<p>Paragrafo censurato: $censored_paragraph</p>";
            echo "<p>Lunghezza del paragrafo censurato:$censored_length</p>";
        
        }else{
            echo "<p>Errore: Paragrafo o parola mancante.</p>";
        }
    }else {
        echo "<p>Errore: Dati non inviati.</p>";
    }
    ?>
</body>
</html>