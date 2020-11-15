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
  <link rel="stylesheet" href="php.css">
  
</head>
<body>
<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>



<form action="exercice8.php" method="POST" >
	<p>
		<label for="pseudo">Pseudo: </label>
		<input type="text" id="pseudo" name="pseudo" value="<?php echo $pseudo; ?>" />
	</p>
	<p>
		<input type="submit" value="ok" />
        <input type="reset" value="vider" />
	</p>

</form>
 
<?php 
echo 'Pseudo : '. $pseudo;
highlight_file(__FILE__);
?>
</body>
</html>