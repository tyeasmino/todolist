<?php
    interface LoginInterface {
        function getUsername();
        function getPassword();

        function login();
    }

    class LoginUser implements LoginInterface {
        public $username = "tyeasmino";
        public $password = "1*2*3";

        function getUsername(): string {
            return $this->username; 
        }
        function getPassword(): string {
            return $this->password; 
        }
        function login(): void {
            echo $this->username ." is logged in<br>";
        }
    }

    $user = new LoginUser;
    echo "username: ". $user->getUsername() ."<br>";
    echo "pasword: ". $user->getPassword() ."<br>";
    echo $user->login();
?>