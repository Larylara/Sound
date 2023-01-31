<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/resources/images/new_r.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/index.css">
    <title>Sound</title>
</head>
<body>
    <header class="center">

        <div class="logo flex">
            <div class="inline">
                <a href="/pages-controller/home">
                    <img class="sound" src="/resources/images/new_r.png" alt="Logo"/>
                    <h1>Sound</h1>
                </a>
                <p>La musique au bout des doigts</p>
            </div>
        </div>
        <div class="navbar center">
            <nav class="flex ">
                <li class="tooltip">
                    <a href="/pages-controller/home"><i style='font-size:1.9rem; padding:.5rem' class="material-icons">&#xe88a;</i></a>
                    <span class="tooltiptext">Accueil</span>
                </li>
                 <li class="tooltip">
                    <i style='font-size:1.5rem; cursor:pointer; padding:.6rem' class='fas log'>&#xf2bd;</i>
                    <span class="tooltiptext">Utilisateur</span>
                </li>
                <li class="tooltip">
                    <a href="/pages-controller/contact"><i style='font-size:1.3rem ; padding:.8rem' class='fas'>&#xf879;</i></a>
                    <span class="tooltiptext">Contact</span>
                </li>
                <li class="tooltip">
                    <i style='font-size:1.5rem; cursor:pointer ; padding:.6rem' class='fas logout'>&#xf2f6;</i>
                    <span class="tooltiptext">Deconnexion/profil</span>
                </li>
                <li class="tooltip">
                    <a href="/pages-controller/more"><i style='font-size:1.4rem; cursor:pointer ; padding:.6rem' class='fas'>&#xf067;</i></a>
                    <span class="tooltiptext">More</span>
                </li>
            </nav>
            <div class="drap n">
                <ul>
                    <li><a href="login" class="login">Se connecter</a></li>
                    <li><a href="/pages-controller/register" class="register">S'inscrire</a></li>
                </ul>
            </div>
            <div class="drapp n">
                <ul>
                    <li><a href="profil">Mon profil</a></li>
                    <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == "admin") : ?>
                        <li><a href="admin">Dashboard</a></li>
                    <?php endif; ?>  
                    <li><a href="logout">Se déconnecter</a></li>
                </ul>
            </div>
            <div class="aff n">
                <input type="search" placeholder="Taper votre recherche">
            </div>
        </div>    

    </header>
    
   
