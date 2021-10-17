<?php
$user = "root";
$database = "tcc";
$con = new mysqli("localhost", $user, "", $database);
if (!$con) {
    die("Couldn't connect to MySQL" . mysql_error());
}



// Criptografar senha -> $senhahash = password_hash($senha, PASSWORD_DEFAULT);
