<?php

    class CommentModel extends Connexion {
        
          public function insertComment($id_, $c_comment) {
            // connexion à la bdd
            $conn = $this->connect();
            $request = "INSERT INTO `sound`.comments (art_id, com_comment) VALUES (:art_id, :comment)";
            
            // prepare()
            $stmt = $conn->prepare($request);
            
            // Définir le template du stmt
            $stmt->execute([
                ":art_id" => $id_,
                ":comment" => $c_comment
            ]);
        }
        
        public function deleteComment($id_) {
            // connexion à la bdd
            $connect = $this->connect();
            
            // cette requête sélectionne tous les articles de la base de données
            $recup = $connect->prepare("DELETE FROM `sound`.comments WHERE art_id=?");
            
            $recup->execute([
                $id_
            ]);           
        }

        public function idComment($id_) {
            $id = $id_;

            // connexion à la bdd
            $connect = $this->connect();
            
            // cette requête sélectionne tous les articles de la base de données
            $recup = $connect->prepare("SELECT * FROM `sound`.comments WHERE art_id=?");
            $recup->execute([
                $id
            ]);
            
            //transformation des données en tableau
            $results = $recup->fetchAll();
            
            //retourne un tableau
            return $results;
        }

    }