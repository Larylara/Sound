<?php

    require "../App/Models/UserModel.php";

    class RegisterController {

        //variable pour instancier la classe UserModel
        protected $model;

        protected $lname;
        protected $fname;
        protected $username;
        protected $email;
        protected $pwd;
        protected $c_pwd;

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

                $this->model->insertUser($this->lname, $this->fname, $this->username, $this->email, $this->pwd);
                header("Location: /pages-controller/register?msg=Vous êtes inscrit");

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
            // $this->test_inputs();
    
            // // insertion dans la bdd
            $this->model = new UserModel();
            $forlog = $this->model->userLogin($this->username);

            $length = count($forlog);

            if($length>0) {
                
                header("Location: /pages-controller/home");
                exit();

            } else {

                header("Location: /pages-controller/login?msg=Ce nom d'utilisateur ou l'addresse email n'existe pas");

            }
            }

        }
   
    }
    