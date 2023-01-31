<?php

    class ImagesController {
        protected $name;
        protected $size;
        protected $path;
        protected $error;
        protected $max_size = 5000000;
        
        public function __construct($name_, $path_, $error_, $size_) {
            $this->name = $name_;
            $this->path = $path_;
            $this->error = $error_;
            $this->size = $size_;
        }

        public function controll() {
            $ext = strtolower(pathinfo($this->name, PATHINFO_EXTENSION));
            $tab_ext = ["jpeg", "jpg", "png", "gif"]; 

            if(in_array($ext, $tab_ext)) {
                if($this->size < $this->max_size) {
                    if($this->error === 0) {
                        $uniq_file = uniqId("S_", true);
                        $uniq_file_name = $uniq_file.".". $ext;
                        $this->name = $uniq_file_name;

                        move_uploaded_file($this->path, "../Public/assets/".$this->name);
                    } else {
                        header("Location: /pages-controller/more?msg=Erreur de téléchargement");
                        exit();
                    }
                } else {
                    header("Location: /pages-controller/more?msg=Fichier trop lourd");
                    exit();
                }  
            } else {
                header("Location: /pages-controller/register?msg=Cette extension n'est pas reconnue. Veuillez en définir une autre");
                exit();
            }            
            return $this->name; 
        }

    }