<?php
    require_once "../App/Models/connexion.php";

    class UserModel extends Connexion {

        protected $lname;
        protected $fname;
        protected $username;
        protected $email;
        protected $password;
        protected $pic;
        protected $file;
        protected $descript;
        protected $date_time;


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
        
        public function cardImg() {
            // connexion à la bdd
            $connect = $this->connect();
        
            // cette requête sélectionne tous les articles de la base de données
            $recup = $connect->prepare("SELECT * FROM `sound`.users");
        
            $recup->execute();
        
            //transformation des données en tableau
            $results = $recup->fetchAll();
                   
            //retourne un tableau
            return $results;
        }

        public function insertUser($lname, $fname, $username, $email, $pwd, $pic) {
            $this->lname = $lname;
            $this->fname = $fname;
            $this->username = $username;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->pic = $pic;
            
            // connexion à la bdd
            $conn = $this->connect();
            
            $request = "INSERT INTO `sound`.users (user_id, user_lastname, user_firstname, user_username, user_email, user_password, user_pic) VALUES (NULL, :lname, :fname, :username, :email, :pwd, :pic)";

            // prepare()
            $stmt = $conn->prepare($request);
            
            // Définir le template du stmt
            $stmt->execute([                
                ":lname" => $this->lname,
                ":fname" => $this->fname,
                ":username" => $this->username,
                ":email" => $this->email,
                ":pwd" => password_hash($this->pwd, PASSWORD_DEFAULT),
                ":pic" => $this->pic                
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

        public function idRequest() {
            // connexion à la bdd
            $connect = $this->connect();
        
            // cette requête sélectionne tous les articles de la base de données
            $recup = $connect->prepare("SELECT * FROM `sound`.requests");        
            $recup->execute();
        
            //transformation des données en tableau
            $results = $recup->fetchAll();
                   
            //retourne un tableau
            return $results;
        }
        
    }