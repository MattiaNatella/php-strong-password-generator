<?php
$password_length = isset($_GET['password']) && is_numeric($_GET['password']) ? (int) $_GET['password'] : 0;

function passwordGenerator($password_length)
{
    $numbers = '1234567890';
    $letters = 'abcdefghijklmnopqrstuwyzABCDEFGHIJKLMNOPQRSTUWYZ';
    $symbols = '!@#$%^&*()';
    $characters_pool = '';
    if (isset($_GET['letters']) && $_GET['letters'] == 'on') {
        $characters_pool .= $letters;
    }
    ;
    if (isset($_GET['numbers']) && $_GET['numbers'] == 'on') {
        $characters_pool .= $numbers;
    }
    ;
    if (isset($_GET['symbols']) && $_GET['symbols'] == 'on') {
        $characters_pool .= $symbols;
    }
    ;

    if (empty($characters_pool)) {
        return ' ';
    }

    $password = '';
    for ($i = 0; $i < $password_length; $i++) {
        $password .= $characters_pool[random_int(0, strlen($characters_pool) - 1)];
    }
    return $password;
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
                <input type="text" class="form-control w-25" id="exampleInputPassword1" name="password">
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
            <div>
                <h2>Password generata: <?php echo passwordGenerator($password_length) ?></h2>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-dark">Annulla</button>
    </form>
</body>

</html>