<?php
    class User {
        public $name;
        public $email;
        public $password;


    }

    $user1 = new User('brad');

    echo $user1->name;