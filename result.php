<?php

session_start();

$password = $_SESSION['password'];

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
    <title>Generatore di password</title>
</head>

<body>

    <div class="card container mt-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Ecco la password generata per te</h5>
            <p class="card-text"><?php echo $password ?></p>
        </div>
    </div>

</body>

</html>