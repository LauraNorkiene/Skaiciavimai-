<?php

$out = '';
if (isset($_POST['k1']) &&  $_POST['k1'] != '') {
    $k1 = $_POST['k1'];
    $k2 = $_POST['k2'];
    $k3 = $_POST['k3'];

    if ((($k1 + $k2) > $k3) &&
        (($k1 + $k3) > $k2) &&
        (($k2 + $k3) > $k1)
    ) {
        $out = "Trikampį sudaryti galime!";
    } else {
        $out = "Neįmanoma sudaryti trikampio!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <div class="main">
        <?php
        include("nav.php");

        ?>

        <div class="card mx-auto mt-5 border border-dark" style="width: 18rem;">
            <div class="card-body mx-auto">
                <h5 class="card-title">Pirmoji užduotis</h5>
                <form action="" method="post">
                    <input class="mt-2" type="text" name="k1" placeholder="Kraštinės 1 ilgis"> <br>
                    <input class="mt-2" type="text" name="k2" placeholder="Kraštinės 2 ilgis"> <br>
                    <input class="mt-2" type="text" name="k3" placeholder="Kraštinės 3 ilgis"> <br>

                    <button id="button" class="mt-3">Skaičiuoti</button>
                </form>
            </div>
        </div>


        <div class="rezultatas fs-4">
            <?= $out ?>
        </div>
    </div>
</body>

</html>