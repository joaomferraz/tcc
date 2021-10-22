<?php
require_once 'conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM sitesfav WHERE id = $id";

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    header('Location: index.php');
    exit;
} else {
    echo "Error deleting record";
}
