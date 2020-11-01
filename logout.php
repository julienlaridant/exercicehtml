<?php
session_start();
//On redirige vers la page index.php
header('Location: index.php');
//On détruit toutes les variables de session
session_unset();
