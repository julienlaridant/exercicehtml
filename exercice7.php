<?php 
// Récupération
$pseudo = ( !empty($_POST['pseudo']) )? $_POST['pseudo'] : ''; // condition : opérateur ternaire
 
$code_error = false;
if( empty($pseudo) )
{
	$code_error = true;
	$message = "The param <pseudo> is not found !";
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Title</title>
  <link rel="stylesheet" href="style.css">
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



<form action="index.php" method="POST" >
	<p>
		<label for="pseudo">Pseudo: </label>
		<input type="text" id="pseudo" name="pseudo" value="<?php echo $pseudo; ?>" />
	</p>
	<p>
		<input type="submit" value="ok" />
     
	</p>

</form>
 
<?php 
echo 'Pseudo : '. $pseudo; 
highlight_file(__FILE__);
?>
</body>
</html>