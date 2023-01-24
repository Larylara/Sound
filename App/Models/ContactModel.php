<?php

    require_once "../App/Models/connexion.php";

    class ContactModel extends Connexion {
        
        protected $lname;
        protected $fname;
        protected $email;
        protected $messages;

        public function insertContact($req_lname, $req_fname, $req_email, $req_messages) {
            $this->lname = $req_lname;
            $this->fname = $req_fname;
            $this->email = $req_email;
            $this->messages = $req_messages;
            
            // connexion à la bdd
            $conn = $this->connect();
            
            $request = "INSERT INTO `sound`.requests (req_lname, req_fname, req_email, req_messages) VALUES (:lname, :fname, :email, :messages)";
            
            // prepare()
            $stmt = $conn->prepare($request);
            
            // Définir le template du stmt
            $stmt->execute([
                
                ":lname" => $this->lname,
                ":fname" => $this->fname,
                ":email" => $this->email,
                ":messages" => $this->messages
                
            ]);
        }

    }