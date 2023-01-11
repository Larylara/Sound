<?php

    class PagesController {
        
        public function home() {
            require_once ("../App/Views/home.php");
        }

        public function login() {
             require_once ("../App/Views/login.php");
        }

        public function register() {
             require_once ("../App/Views/register.php");
        }

        public function contact() {
             require_once ("../App/Views/contact.php");
        }

        public function about() {
             require_once ("../App/Views/about.php");
        }

        public function profil() {
             require_once ("../App/Views/profil.php");
        }

    }