<?php

    class CommentModel extends Connexion {
        
          public function insertComment($id_, $c_comment) {
            // $art = $id_;
            // $comment = $c_comment;
            
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

    }