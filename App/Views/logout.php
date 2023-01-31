<?php

session_start(); 

// destruire ou supprimer la session
session_destroy();
session_start();
header("Location: /pages-controller/home");