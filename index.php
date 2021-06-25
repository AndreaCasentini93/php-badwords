<?php
    /*
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */

    $text = 'PHP è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.';
    $censored_text = str_replace($_GET["parola"], '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TITLE -->
        <title>PHP Badwords</title>
    </head>

    <body>
        <h2>Paragrafo Originale</h2>
        <h4>
            <?php echo $text; ?>
        </h4>
        <p>
            Il paragrafo è costituito da <?php echo strlen($text); ?> caratteri.
        </p>

        <br>

        <h2>Paragrafo Censurato</h2>
        <h4>
            <?php echo $censored_text; ?>
        </h4>
        <p>
            Il paragrafo è costituito da <?php echo strlen($censored_text); ?> caratteri.
        </p>
    </body>
</html>