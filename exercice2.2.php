<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Document</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    
<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>

<?php


$coordonnees = array (
    'prenom' => 'julien',
    'nom' => 'Dupont',
     'mdp' => 'azerty');

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . ']  ' . $element . '<br />';
}

highlight_file(__FILE__);

?>



</body>
</html>