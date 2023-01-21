<?php

// $id = session_id();
session_start(); 

// récupérer l'ancienne session
// unset($id);

// vider le contenu de la session
// session_unset();

// destruire ou supprimer la session
session_destroy();
session_start();
header("Location: /pages-controller/home");