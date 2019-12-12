<?php

$host = 'localhost';
$db = 'schema';
$username = 'root';
$password = 'E.Francis14';

function validatePassword($password) {
    if (strlen($password) > 8) {
        if(preg_match('/[0-9+]/', $password)) {
            return $password;
        } else {
            echo "Invalid password \n";
        }
    } else {
        echo "Invalid password length\n";
        var_dump($password);
    }
}