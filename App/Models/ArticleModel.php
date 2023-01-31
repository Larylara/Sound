<?php
    require_once "../App/Models/connexion.php";
    
    class ArticleModel extends Connexion {
        
        public function insertArticle($a_lname, $a_fname, $a_email, $a_artname, $a_file, $a_descript) {
            $lname = $a_lname;
            $fname = $a_fname;
            $email = $a_email;
            $art_name = $a_artname;
            $picture = $a_file;
            $descript = $a_descript;
            
            // connexion à la bdd
            $conn = $this->connect();
            
            $request = "INSERT INTO `sound`.articles (art_lname, art_fname, art_email, art_artname, art_picture, art_description) VALUES (:lname, :fname, :email, :artname, :picture, :descript)";
            
            // prepare()
            $stmt = $conn->prepare($request);
            
            // Définir le template du stmt
            $stmt->execute([                
                ":lname" => $lname,
                ":fname" => $fname,
                ":email" => $email,
                ":artname" => $art_name,
                ":picture" => $picture,
                ":descript" => $descript                
            ]);
        }

        public function cardArticle() {
            // connexion à la bdd
            $connect = $this->connect();
        
            // cette requête sélectionne tous les articles de la base de données
            $recup = $connect->prepare("SELECT * FROM `sound`.articles");
        
            $recup->execute();
        
            //transformation des données en tableau
            $results = $recup->fetchAll();
                   
            //retourne un tableau
            return $results;            
        }
        
        public function idArticle($id_) {
            $id = $id_;

            // connexion à la bdd
            $connect = $this->connect();
            
            // cette requête sélectionne tous les articles de la base de données
            $recup = $connect->prepare("SELECT * FROM `sound`.articles WHERE art_id=?");            
            $recup->execute([
                $id
            ]);
            
            //transformation des données en tableau
            $results = $recup->fetchAll();
            
            //retourne un tableau
            return $results;
        }

        public function deleteArticle($id_) {
            // connexion à la bdd
            $connect = $this->connect();
            
            // cette requête sélectionne tous les articles de la base de données
            $recup = $connect->prepare("DELETE FROM `sound`.articles WHERE art_id=?");
            
            $recup->execute([
                $id_
            ]);           
        }
    }