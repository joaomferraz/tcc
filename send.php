<?php
require_once 'conexao.php';
$nome = $_POST['nomeSite'];
$urls = $_POST['linkSite'];
$img = $urls . '/favicon.ico';

$sql = "INSERT INTO sitesfav (nome,urls,img) VALUES ('$nome', '$urls','$img');";
$con->query($sql);
header('Location: index.php');


//FILTER_VALIDATE_URL