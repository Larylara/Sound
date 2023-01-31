<?php
     require "../App/Models/ArticleModel.php";
     require "../App/Models/CommentModel.php";
     require "../App/Models/UserModel.php";

     class PagesController {
        
          public function home() {
               $card = new ArticleModel();
               $data = $card->cardArticle();

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

          public function more() {
               require_once ("../App/Views/more.php");
          }

          public function article() {
               $regex = $_SERVER["QUERY_STRING"];
               $reg = preg_match("/(?<id>\d+)/", $regex, $array);
               $id = $array["id"];
               
               $card = new ArticleModel();
               $data = $card->idArticle($id);
               
               $coms = new CommentModel();
               $coms_data = $coms->idComment($id);

               require_once ("../App/Views/article.php");
          }

          public function profil() {
               $img = new UserModel();
               $pp = $img->cardImg();

               require_once ("../App/Views/profil.php");
          }

          public function admin() {
               $card = new ArticleModel();
               $data = $card->cardArticle();

               $coms = new UserModel();
               $dt = $coms->idRequest();
               
               require_once ("../App/Views/dashboard.php");
          }

          public function logout() {
               require_once ("../App/Views/logout.php");
          }

    }