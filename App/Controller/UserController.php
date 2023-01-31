<?php
    session_start();

    require "../App/Models/UserModel.php";
    require "../App/Controller/ImagesController.php";

    class UserController {
        //variable pour instancier la classe UserModel
        protected $model;
        protected $lname;
        protected $fname;
        protected $username;
        protected $email;
        protected $pwd;
        protected $c_pwd;
        protected $pic;
        protected $file;
        protected $descript;
        protected $date_time;

        public function validateinput() {
            $this->emptyInputs();
            $this->validateUsername();
            $this->passwordValidate();
            $this->validateUseremail();
        }

        /**
         * vérifier si les inputs sont renseignés
         * @return boolean
         */

        public function emptyInputs() {
            if (empty($this->lname) || empty($this->fname) || empty($this->username) || empty($this->email) || empty($this->pwd) || empty($this->c_pwd)) {
                header("Location: /pages-controller/register?msg=Veuillez remplir tous les champs");
                exit();
            } else {
                return false;
            } 
        }

        public function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        public function validateUsername() {
            // correspond à un nom d'utilisateur commençant par un caractère alphabétique suivi d'un ou plusieurs caractères alphabétique|nombtes|@|_|-
            if(!preg_match("/^\w[A-Za-z0-9_\-@]+$/i", $this->username)) {
                header("Location: /pages-controller/register?msg_username");
                exit();
            } else {
                return false;
            }
        }

        public function validateUseremail() {
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                header("Location: /pages-controller/register?msg_email");
                exit();
            } else {
                return false;
            }
        }

        public function passwordValidate() {
            if($this->pwd !== $this->c_pwd) {
                header("Location: /pages-controller/register?msg=Les mots de passe entrés ne sont pas identiques");
                exit();
            } else {
                return false;
            }
        }


        public function register(){

            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
                $this->lname = $this->test_input($_POST["lname"]);
                $this->fname = $this->test_input($_POST["fname"]);
                $this->username = $this->test_input($_POST["uname"]);
                $this->email = $this->test_input($_POST["email"]);
                $this->pwd  = $this->test_input($_POST["pwd"]);
                $this->c_pwd  = $this->test_input($_POST["c_pwd"]);

                $file_name = $_FILES["file"]["name"];
                $file_path = $_FILES["file"]["tmp_name"];
                $file_error = $_FILES["file"]["error"];
                $file_size = $_FILES["file"]["size"];

            $inst = new ImagesController($file_name, $file_path, $file_error, $file_size);
            $this->pic = $inst->controll();

            //vérification du mot de passe
            $this->validateinput();
    
            // // insertion dans la bdd
            $this->model = new UserModel();
            $array = $this->model->userRegister($this->email, $this->username);

            $longueur = count($array);
                if($longueur>0) {
                    header("Location: /pages-controller/register?msg=Ce nom d'utilisateur ou l'addresse email existe déjà");
                    exit();
                } else {
                    $this->model->insertUser($this->lname, $this->fname, $this->username, $this->email, $this->pwd, $this->pic);
                    header("Location: /pages-controller/home");
                    exit();
                }
            }
        }

        public function empty_inputs() {
            if (empty($this->username) || empty($this->pwd)) {
                header("Location: /pages-controller/login?msg=Veuillez remplir tous les champs");
                exit();
            } else {
                return false;
            }
        }

        public function login(){
            
            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
                $this->username = $this->test_input($_POST["uname"]);     
                $this->pwd = $this->test_input($_POST["pwd"]);

            //vérification du mot de passe
            $this->empty_inputs();
    
            // // insertion dans la bdd
            $this->model = new UserModel();
            $forlog = $this->model->userLogin($this->username);
            $pass = password_verify($this->pwd, $forlog[0]["user_password"]);
            $length = count($forlog);

            if($pass === true) {
                $_SESSION["lname"] = $forlog[0]["user_lastname"];
                $_SESSION["fname"] = $forlog[0]["user_firstname"];
                $_SESSION["uname"] = $this->username;
                $_SESSION["email"] = $forlog[0]["user_email"];
                $_SESSION["user_file"] = $forlog[0]["user_pic"];
                $_SESSION["admin"] = $forlog[0]["role"] == "admin";
                $_SESSION["users"] = $forlog[0]["role"] == "users";
                
                header("Location: /pages-controller/home");
                exit();
            } else {
                header("Location: /pages-controller/login?msg=Ce nom d'utilisateur ou mot de passe n'existe pas");
                exit();
            }
        }
    }
    
}
        
  
    