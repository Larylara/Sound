<?php
    require_once "../App/Models/connexion.php";

    class UserModel extends Connexion {
        private $lname;
        private $fname;
        private $username;
        private $email;
        private $password;


        public function userRegister($u_email, $u_username) {
           
            $this->username = $u_username;
            $this->email = $u_email;
            // connexion à la bdd
            $conn = $this->connect();

            // cette requête vérifie si l'utilisateur qui est entrain de s'inscrire existe déjà dans la base
            $req = $conn->prepare("SELECT * FROM `sound`.users where user_email = ? OR user_username = ?;");

            $req->execute(array($this->email, $this->username));

            //transformation des données en tableau
            $tab = $req->fetchAll();
           
            //retourne un tableau
            return $tab;
        }
        
        public function insertUser($lname, $fname, $username, $email, $pwd) {
            
            $this->lname = $lname;
            $this->fname = $fname;
            $this->username = $username;
            $this->email = $email;
            $this->pwd = $pwd;
            
            // connexion à la bdd
            $conn = $this->connect();
            
            $request = "INSERT INTO `sound`.users (user_id, user_lastname, user_firstname, user_username, user_email, user_password) VALUES (NULL, :lname, :fname, :username, :email, :pwd)";

            
            // prepare()
            $stmt = $conn->prepare($request);
            
            // Définir le template du stmt
            $stmt->execute([
                
                ":lname" => $this->lname,
                ":fname" => $this->fname,
                ":username" => $this->username,
                ":email" => $this->email,
                ":pwd" => password_hash($this->pwd, PASSWORD_DEFAULT)
                
            ]);
        }
        
        public function userLogin($u_username) {
                   
            $this->username = $u_username;
            
            // connexion à la bdd
            $connect = $this->connect();
        
            // cette requête vérifie si l'utilisateur quest entrain de s'inscrire existe déjà dans lbase
            $re = $connect->prepare("SELECT * FROM `sound`.users where user_username = ?");
        
            $re->execute(array($this->username));
        
            //transformation des données en tableau
            $arr = $re->fetchAll();
                   
            //retourne un tableau
            return $arr;
        }
        
    }