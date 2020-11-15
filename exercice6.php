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

    <form action="" method="GET">


        prenom<input type="text"name="prenom">
        age<input type="text"name="age">
        <button>
        envoyer
        </button>
         

       </form>
         <?php

         if (isset($_GET['prenom'])) {
            echo "<p>Tu t'appelles ".$_GET['prenom']." !</p>";
         }
            
                
                  
      if (isset($_GET['prenom'])) {
        echo "<p>Tu as ".($_GET['age'])." ans !</p>";
                 }
                 highlight_file(__FILE__);
         ?>
         <style>
             p {
                 color:purple;
             }
         </style>

    
</body>
</html>