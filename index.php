<?php

require_once './functions.php';

if ($password != "") {

    session_start();
    //salviamo la password in una variabile di sessione
    $_SESSION["password"] = $password;
    //dirottiamo l'utente alla pagina result.php
    header("Location: ./result.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" class="container mt-5 border rounded p-3 bg-light">
        <div class="row-cols-12">

            <!-- INPUT PASSWORD -->

            <div class="mb-3 gap-5 d-flex justify-content-between ">
                <label for="exampleInputPassword1" class="form-label">Lunghezza Password:</label>
                <input type="number" class="form-control w-25" id="exampleInputPassword1" value="5" name="length"
                    min="5" max="20">
            </div>

            <!-- INPUT  -->
            <div class="mb-3 p-0 form-check d-flex justify-content-between">
                <label class="form-check-label" for="exampleCheck1">Consenti ripetizioni di più caratteri:</label>
                <div class="d-flex flex-column justify-content-start">

                    <div>
                        <input type="radio" name="repeat" value="yes" id="repeat">
                        <label for="repeat">Si</label>
                    </div>
                    <div>
                        <input type="radio" name="repeat" value="no" id="no-repeat">
                        <label for="no-repeat">No</label>
                    </div>
                    <div class="mt-3">
                        <input type="checkbox" name="letters">
                        <label for="">Lettere</label>
                    </div>
                    <div>
                        <input type="checkbox" name="numbers">
                        <label for="">Numeri</label>
                    </div>
                    <div>
                        <input type="checkbox" name="symbols">
                        <label for="">Simboli</label>
                    </div>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-dark">Annulla</button>
        <?php
        echo $password;
        ?>
    </form>
</body>

</html>