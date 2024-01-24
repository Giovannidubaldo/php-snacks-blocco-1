<!-- LOGICA DI LAVORO -->

<?php

?>

<!-- LOGICA DI VISUALIZZAZIONE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack 2</title>
</head>
<body>
    <h1 class="text-center my-4">Inserisci i dati per eseguire l'accesso</h1>
    <div class="container">
        <div class="row">
            <form action="index.php" method="GET">
                <div class="row">
                    <div class="col-4">
                        <label for="control-label">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Scrivi il tuo nome" class="form-control" required>
                    </div>
                    <div class="col-4">
                        <label for="control-label">Mail</label>
                        <input type="text" id="mail" name="mail" placeholder="Inserisci la tua mail" class="form-control" required>
                    </div>
                    <div class="col-4">
                        <label for="control-label">Età</label>
                        <input type="text" id="età" name="età" placeholder="Inserisci la tua età" class="form-control" required>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger">Invia</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>