<?php
    $text = "PHP (acronimo ricorsivo di \"PHP: Hypertext Preprocessor\", preprocessore di ipertesti; originariamente acronimo di \"Personal Home Page\") è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la PHP License. Attualmente è principalmente utilizzato per sviluppare applicazioni web lato server, ma può essere usato anche per scrivere script a riga di comando o applicazioni stand-alone con interfaccia grafica.";
    $string = "censura";
    $censored_text = str_replace($_GET[$string], '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/php-logo.png" type="image/x-icon">
        <!-- FONT GOOGLE -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- TITLE -->
        <title>PHP Badwords</title>
    </head>

    <body>
        <div class="wrapper">
            <h1>Inserisci in Querystring la chiave "<span><?php echo $string; ?></span>" e come valore la parola che vuoi censurare</h1>
            <p>
                <?php echo $censored_text; ?>
            </p>
            <h2>
                Il paragrafo è costituito da <span><?php echo strlen($censored_text); ?></span> caratteri.
            </h2>
        </div>
    </body>
</html>