<?php

    class CommentController {

        public function comment(){
            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
                $comment  = $this->test_input($_POST["comments"]);
                        
                if(isset($_POST["submit"])) {
                    $this->model = new ArticleModel();
                    $this->model->insertComment($comment);
        
                    header("Location: /pages-controller/art");
                    exit();    
                } else {
                    header("Location: /pages-controller/home?msg=Echec d'envoi du commentaire");
                    exit();
                }
            }
        }

    }