<?php
    session_start();
    require "../App/Models/ContactModel.php";

    class ContactController {

        protected $lname;
        protected $fname;
        protected $email;
        protected $messages;

        public function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function emptyInputs() {
            if (empty($this->lname) || empty($this->fname) || empty($this->email) || empty($this->messages)) {                
                header("Location: /pages-controller/contact?msg=Veuillez remplir tous les champs");
                exit();
            } else {
                return false;
            }
        }

        public function contact(){
            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
                
                $this->lname = $this->test_input($_POST["lname"]);
                $this->fname = $this->test_input($_POST["fname"]);
                $this->email = $this->test_input($_POST["email"]);
                $this->messages = $this->test_input($_POST["messages"]);
                
                $this->emptyInputs();
                if(isset($_POST["submit"])) {
                    
                    $this->model = new ContactModel();
                    $this->model->insertContact($this->lname, $this->fname, $this->email, $this->messages);

                    $_SESSION["lname"] = $this->lname;
                    $_SESSION["fname"] = $this->fname;
                    $_SESSION["email"] = $this->email;
                    $_SESSION["messages"] = $this->messages;

                    header("Location: /pages-controller/contact?msg=Message envoyé avec succès");
                    exit();
                } else {
                    header("Location: /pages-controller/contact?msg=Echec d'envoi du messages");
                    exit();
                }
            }
        }

    }