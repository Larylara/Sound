<?php
    session_start();

    require "../App/Models/CommentModel.php";

    class CommentController {

        protected $comment;
        protected $model;

        public function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function comment(){
            
            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
                
                $this->comment  = $this->test_input($_POST["comments"]);
                
                if(isset($_POST["submit"])) {
                    
                    $this->model = new CommentModel();
                    $this->model->insertComment($this->comment);

                    header("Location: /pages-controller/home");
                    exit();
                    
                } else {

                    header("Location: /pages-controller/home?msg=Echec d'envoi du commentaire");
                    exit();

                }
            }

        }

    }
      // Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae laboriosam ratione harum in culpa nam aliquid quam dignissimos temporibus, suscipit accusantium doloremque veritatis sequi repudiandae laudantium quo reprehenderit odit officiis.