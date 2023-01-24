<?php

    // on appelle le fichier Router.php
  
    require "../Core/Router.php";
    $url = $_SERVER["QUERY_STRING"];

    // instanciatation du router
    $router = new Router();
    $router->add("", ["controller" => "pages-controller", "action" => "home"]);
    $router->add("{controller}/{action}");
    $router->add("admin/{controller}/{action}");
    $router->add("{controller}/{id:\+}/{action}");

    $router->autoload();
    $router->dispatch($url);
