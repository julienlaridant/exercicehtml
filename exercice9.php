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