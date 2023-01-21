<?php

    require_once "../App/Models/connexion.php";

    class CommentModel extends Connexion {
        
        protected $comment;

        public function insertComment($c_comment) {
     
            $this->comment = $c_comment;
            
            // connexion à la bdd
            $conn = $this->connect();
            
            $request = "INSERT INTO `sound`.comments (com_comment) VALUES (:comment)";
            
            // prepare()
            $stmt = $conn->prepare($request);
            
            // Définir le template du stmt
            $stmt->execute([
                ":comment" => $this->comment
            ]);
        }

        public function cardComment() {

            // connexion à la bdd
            $connect = $this->connect();
        
            // cette requête vérifie si l'utilisateur quest entrain de s'inscrire existe déjà dans lbase
            $recup = $connect->prepare("SELECT * FROM `sound`.comments");
        
            $recup->execute();
        
            //transformation des données en tableau
            $results = $recup->fetchAll();
                   
            //retourne un tableau
            return $results;

        }

    }