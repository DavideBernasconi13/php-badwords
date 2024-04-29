<!-- 
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->
<?php
$badwords = $_GET["badwords"];
$message = $_GET["message"];
$newmessage = str_replace($badwords, "***", $message);
$lunghezza = strlen($message);

// echo var_dump($message);
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Badwords | Result</title>
</head>

<body>
    <div class="container">
        <h1 class="bg-success text-center text-light">Bad words | Result</h1>
        Il tuo messaggio è: <?php echo $message ?></p>
        <p>La lunghezza della stringa è: <?php echo $lunghezza ?> caratteri. </p>
        <p>Il tuo nuovo messaggio è: <?php echo $newmessage ?></p>

</body>