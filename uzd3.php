<?php

$pradzia = 1984;

$out = "";
if (isset($_POST['metai']) && is_numeric($_POST['metai'])) {
  $metai = $_POST['metai'];
  $rez = ($pradzia - $metai);
  $rezultatas = substr($rez, -1);

  if ($metai < $pradzia) {
    $out = "Nėra duomenų!";
  } else {
    switch ($rezultatas) {
      case 0:
        $spalva = "ŽALIA";

      case 1:
        $spalva = "ŽALIA!";
        break;
      case 2:
        $spalva = "RAUDONA";
      case 3:
        $spalva = "RAUDONA!";
        break;
      case 4:
        $spalva = "GELTONA";
      case 5:
        $spalva = "GELTONA!";
        break;
      case 6:
        $spalva = "BALTA";
      case 7:
        $spalva = "BALTA!";
        break;
      case 8:
        $spalva = "JUODA";
      case 9:
        $spalva = "JUODA!";
        break;
    }
    $out = "Metų spalva -  $spalva";
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
        <h5 class="card-title">Trečioji užduotis</h5>
        <form action="" method="post">
          <input class="mt-3" type="text" name="metai" placeholder="Įvekite metus"> <br>

          <button class="mt-4">Skaičiuoti</button>
        </form>
      </div>
    </div>


    <div class="rezultatas">

      <?= $out ?>
    </div>


  </div>

</body>

</html>