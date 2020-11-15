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

    <form action="" method="post">


        prenom<input type="text"name="prenom">
        age<input type="text"name="age">
        <button>
        Go
        </button>
         

       
         <?php

         if (isset($_POST['prenom'])) {
            echo "<p>Tu t'appelles ".$_POST['prenom']." !</p>";
         }
            
                
                  
      if (isset($_POST['prenom'])) {
        echo "<p>Tu as ".$_POST['age']." ans !</p>";
                 }
                 highlight_file(__FILE__);
         ?>
         <style>
             p {
                 color:red;
             }
         </style>

    </form>
</body>
</html>