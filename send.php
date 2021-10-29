<?php
require_once 'conexao.php';
$nome = $_POST['nomeSite'];
$urls = $_POST['linkSite'];
$img = "https://besticon.herokuapp.com/icon?size=120&url=" . $nome . ".com";
//$img = $urls . '/favicon.ico';

//Outra maneira para pegar o ícone do site
//$img = "https://besticon.herokuapp.com/icon?size=120&url=" . $nome . ".com";

$sql = "INSERT INTO sitesfav (nome,urls,img) VALUES ('$nome', '$urls','$img');";
$con->query($sql);
header('Location: index.php');


//FILTER_VALIDATE_URL