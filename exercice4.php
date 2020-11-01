<!DOCTYPE html>
<html>


<head>
	<title>titre</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="php.css">

</head>
<body>

<nav>
     <img class="home" src="home.png" alt="accueil" >
       
     <ul>
        
        <li class="deroulant"><a href="#">td1 html &ensp;</a>
          <ul class="sous">
            <li><a href="exercice1.html"></a>exercice1</li>
            <li><a href="exercice2.html"></a>exercice2</li>
            <li><a href="exercice3.html"></a>exercice3</li>
            <li><a href="ExoCss_1.html"></a>ExoCss_1.</li>
            <li><a href="ExoCss_2.html"></a>ExoCss_2</li>
            <li><a href="ExoCss_3.html.html"></a>ExoCss_3</li>
            <li><a href="formulaire1.html"></a>formulaire1</li>

          </ul>
        </li>
     
     
     
     <ul>
        
            <li class="deroulant"><a href="#">td1 php &ensp;</a>
              <ul class="sous">
                <li><a href="exercice1.php"></a>exercice1</li>
                <li><a href="exercice2.php"></a>exercice2</li>
                <li><a href="exercice3.php"></a>exercice3</li>
                <
                <li><a href="exercice4.php"></a>exercice4</li>
                <li><a href="exercice5.php"></a>exercice5</li>
                <li><a href="exercice6.php"></a>exercice6</li>
                <li><a href="exercice7.php"></a>exercice7</li>
                <li><a href="exercice8.php"></a>exercice8</li>
                <li><a href="exercice9.php"></a>exercice9</li>
              </ul>
            </li>
              

             
    </nav>


<?php

  function racines($a, $b, $c) {
    echo "Recherche des solutions de l'équation $a x² + $b x + $c<br>";
    $delta = $b*$b - (4 * $a * $c);
    if ($delta < 0)
      echo "Cette équation n'a pas de solution.";
    if ($delta == 0)
      echo "Cette équation a une racine double égale à ".-$b/(2*$a);
    if ($delta > 0){
      $racine1 = (-$b - sqrt($delta))/(2*$a);
      $racine2 = (-$b + sqrt($delta))/(2*$a);
      echo "Cette équation a deux racines : $racine1 et $racine2";
    }
  }
  racines(4, 7, 2);
  highlight_file(__FILE__);
?>




</body>
</html>