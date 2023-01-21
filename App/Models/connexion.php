<?php

    class Connexion {
        /**
         * La fonction permettant la connexion à la base de donnée
         * @return PDO
         * 
         */

        protected function connect() {
            /**
             * Le nom du serveur
             * @var string
             */
            $DB_host = "localhost";

            /**
             * Le nom de la base de données
             * @var string
             */
            $DB_name = "sound";

            /**
             * Le nom d'utilisateur
             * @var string
             */
            $username = "root";

            /**
             * Le mot de passe
             * @var string
             */
            $password = "";

            $dsn = "mysql:host=$DB_host;dbname=$DB_name;charset=utf8";

            try {
                $conn = new PDO($dsn, $username, $password);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $conn;
                
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>