<?php 
    
    class User {
        public string $email;
        public string $password;
        public string $userType;

        public function __construct(string $email, string $password) {
            $this->email = $email;
            $this->password = $password;
            $this->userType = 0;
        }

    }

?>