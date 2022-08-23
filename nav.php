<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Meniu</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">


<body>

   <div class="main">

      <nav class="navbar navbar-expand-lg bg-light">
         <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav mx-auto fs-5">
                  <li class="nav-item">
                     <a class="nav-link active fw-bolder" aria-current="page" href="nav.php">Home</a>
                  </li>
                  <li class="nav-item ms-2">
                     <a class="nav-link active" href="uzd1.php">Pirmoji užduotis</a>
                  </li>
                  <li class="nav-item ms-2">
                     <a class="nav-link active" href="uzd2.php">Antroji užduotis</a>
                  </li>
                  <li class="nav-item ms-2">
                     <a class="nav-link active" href="uzd3.php">Trečioji užduotis</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </div>

   <div class="card mx-auto mt-5 border border-dark" style="width: 55rem;">
      <div class="card-body mx-auto">
         <h5 class="card-title">Namų darbai</h5>

         <p>Sukurkite puslapius į kurios galėtumėme įvesti duomenis, ir gautumėme atsakymą (kiekviena užduotis turi būti sprendžiama skirtingame puslapyje, padarykite patogų vaikščiojimą tarp užduočių (meniu)).:</p>

         <p> Įvedami skaičiai -a, b, c –kraštinių ilgiai (į atskirus input laukus). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir rezultatą išvestų. </p>

         <p> 2. Pirmosios vasaros olimpinės žaidynės įvyko 1896 m. Atėnuose. Po to jos vyko arba turėjo vykti kas ketveri metai, t.y. 1900 m. – antrosios, 1904 m. – trečiosios ir t.t. Neįvykusioms žaidynėms skiriamas eilės numeris, o jų metai vis tiek laikomi olimpiniais. Tinklapyje turi būti įvedami metai, nustatykite olimpinių žaidimų numerį, jei metai yra olimpiniai arba praneškite, kad metai ne olimpiniai. Tinkalpyje turi būti išvedama ar tai buvo olimpiniai metai ar ne, jei tai buvo olimpiniai metai taip pat išvesti ir jų numerį.</p>

         <p> 3. Senovės japonų kalendorių sudarė 60 metų ciklas. Visi metai cikle buvo sunumeruoti nuo 1 iki 60 ir suskirstyti poromis, kurių kiekviena turėjo savo spalvą (žalią, raudoną, geltoną, baltą ar juodą). Ciklo metų spalvos buvo paskirstytos taip:
            1, 2, 11, 12, 21, 22, …, 51, 52 metai – žalia spalva;
            3, 4, 13, 14, 23, 24, …, 53, 54 metai – raudona spalva;
            5, 6, 15, 16, 25, 26, …, 55, 56 metai – geltona spalva;
            7, 8, 17, 18, 27, 28, …, 57, 58 metai – balta spalva;
            9, 10, 19, 20, 29, 30, …, 59, 60 metai – juoda spalva.</p>

         <p> Žinoma, kad naujasis 60 metų ciklas prasidėjo 1984-aisiais ir baigsis 2043-iaisiais metais; 1984-ieji ir 1985-ieji buvo žalios spalvos metai, 1986-ieji ir 1987-ieji buvo raudonos spalvos metai, 2043-ieji bus juodos spalvos metai. Sukurkite puslapį kuriame būtų įvedami metai ir būtų išvedama kokia yra įvestų metų spalva pagal japonų kalendorių.</p>

         <p> Sprendžiant užduotį panaudokite switch sąkinį.
         </p>
      </div>
   </div>
</body>

</html>