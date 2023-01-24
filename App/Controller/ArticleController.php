<?php
    session_start();

    require "../App/Models/ArticleModel.php";
    require "../App/Models/CommentModel.php";
    require "../App/Controller/ImagesController.php";

    class ArticleController {

        protected $lname;
        protected $fname;
        protected $email;
        protected $art_name;
        protected $picture;
        protected $descript;
        
        public function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function emptyInputs() {
            
            if (empty($this->lname) || empty($this->fname) || empty($this->email) || empty($this->art_name) || empty($this->descript)) {
                header("Location: /pages-controller/about?msg=Veuillez remplir tous les champs");
                exit();
            } else {
                return false;
            }
            
        }

        public function article(){
            
            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
                
                $this->lname = $this->test_input($_POST["lname"]);
                $this->fname = $this->test_input($_POST["fname"]);
                $this->email = $this->test_input($_POST["email"]);
                $this->art_name  = $this->test_input($_POST["artname"]);
                $this->descript  = $this->test_input($_POST["descript"]);

                $file_name = $_FILES["file"]["name"];
                $file_path = $_FILES["file"]["tmp_name"];
                $file_error = $_FILES["file"]["error"];
                $file_size = $_FILES["file"]["size"];
                
                $this->emptyInputs();
                $inst = new ImagesController($file_name, $file_path, $file_error, $file_size);
                $this->picture = $inst->controll();

                if(isset($_POST["submit"])) {
                    $this->model = new ArticleModel();
                    $this->model->insertArticle($this->lname, $this->fname, $this->email, $this->art_name, $this->picture, $this->descript);
                    header("Location: /pages-controller/home");
                    exit();  
                } else {
                    header("Location: /pages-controller/about?msg=Echec d'envoi de l'article");
                    exit();
                }
            }
        }

        public function comment(){
            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
                $c_comment  = $this->test_input($_POST["comments"]);
                $id_ = $this->test_input($_POST["art_id"]);
                            
                $this->model = new CommentModel();
                $this->model->insertComment($id_, $c_comment);
            
                header("Location: /pages-controller/?id=$id/article");
                exit();    
            } else {
                header("Location: /pages-controller/home?msg=Echec d'envoi du commentaire");
                exit();
            }
        }

    }
    //   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae laboriosam ratione harum in culpa nam aliquid quam dignissimos temporibus, suscipit accusantium doloremque veritatis sequi repudiandae laudantium quo reprehenderit odit officiis.