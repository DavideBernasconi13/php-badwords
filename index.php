<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Badwords</title>
</head>

<body>
    <div class="container">
        <h1 class="bg-danger text-center text-light">Bad words</h1>
        <p>Inserisci un paragrafo di testo e una parola da censurare...</p>

        <!-- Form -->
        <form action="result.php" method="POST">
            <!-- Bad words -->
            <div data-mdb-input-init class="form-outline mb-4 mt-4">
                <input type="text" id="badwords" class="form-control" name="badwords">
                <label class="form-label" for="badwords">Parola da censurare</label>
            </div>
            <!-- Message -->
            <div data-mdb-input-init class="form-outline mb-4">
                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                <label class="form-label" for="message">Scrivi il tuo messaggio</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-success btn-block w-100">
                Invia
            </button>
        </form>
    </div>

</body>

</html>