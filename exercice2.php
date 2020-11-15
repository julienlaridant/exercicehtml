<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="php.css">
    <title>Document</title>
</head>
<body>
<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>


<?php
$nombre = array( '1','2','3','4','5');
for ($numero = 0; $numero < 5; $numero++){
    echo $nombre[$numero] . '<br />';
}
highlight_file(__FILE__);
?>


</body>
</html>