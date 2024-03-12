<?php
    function registerUser($email = 'vaime') {
        echo $email . ' registered sucesfully ';
    }

    registerUser();

    function sum($n1, $n2) {
        return $n1 + $n2;
    }

    $number = sum(4, 4);
    echo $number;