<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>exercice3</title>
</head>
<body>

<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>


<h1 align="center">Exercice 3</h1>
    <?php
    include 'fonction.php';?>
    <form action="" method="post">
    
        nombre1:<input type="number" name="nombre1" />
        nombre2:<input type="number" name="nombre2" />
        nombre3:<input type="number" name="nombre3" />
    
        <p><input type="submit" value="OK"></p>
<?php
if(isset($_POST["nombre1"])){
        echo moy($_POST['nombre1'], $_POST['nombre2'], $_POST['nombre3']);
}
    ?>



</body>
</html>