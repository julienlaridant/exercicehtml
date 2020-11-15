<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>erxercice1</title>
    <link rel="stylesheet" href="php.css">


</head>
<body>
<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>

 <?php

$NombreAaleatoire = rand (0,100);

if($NombreAaleatoire%2 == 1){
    
    echo '<div class="rouge"> impaire</div>';


}else{
    echo '<div class="bleue"> paire</div>';
}

 highlight_file(__FILE__);
 ?>

</body>
</html>