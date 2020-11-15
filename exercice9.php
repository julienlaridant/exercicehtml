<?php

    //On démarre la session (à mettre à chaque page)
    
    session_start();

    //Vérification (vite-fait, fait le à ta façon et sécurisé)
    if (isset($_POST['username']) && !empty($_POST['username']) || isset($_POST['password']) && !empty($_POST['password'])) {
        if ($_POST['username'] != 'Julien' && $_POST['password'] != '1234') {
            echo 'Login ou mot de passe incorrect';
        }
        else {
            $_SESSION['username'] = $_POST['username']; //On stocke le nom d'utilisateur pour l'afficher
            $_SESSION['connected'] = 1; //Determine si l'utilisateur est connecté
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Test</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>

<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>

    <main>
        <?php

        //Quand l'utilisateur est connecté
            if(isset($_SESSION['connected'])) {
                $style = 'display: none;';
                echo "<p>Bienvenue $_SESSION[username]</p>";
                //Création du bouton pour la déconnexion
                echo "<a href=\"logout.php\"><input type=\"button\" value=\"Déconnexion\"></a>";
            }

           
        ?>
        <form action="index.php" method="post" style="">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username">
            <label for="password">Mot de passe</label>
            <input type="password" id ="password" name="password">
            <button type="submit">Connexion</button>
        </form>
      
    </main>
  <?php  highlight_file(__FILE__); ?>
</body>
</html>