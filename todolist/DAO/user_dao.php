<?php

    require_once("users.php");
    require_once("includes/banco.php");

    class UserDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(User $user) {
            $stmt = Banco::getInstance()->prepare("INSERT INTO users(email, password, userType) VALUES (:email, :password, :userType)");
            $stmt->bindParam("email", $user->email);
            $stmt->bindParam("password", $user->password);
            $stmt->bindParam("userType", $user->userType);

            $stmt->execute();
        }

    }

?>