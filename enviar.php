<?php //Senha usuario recom, senha
$con = new mysqli("localhost","recom","senha","recom");
$username = filter_input(INPUT_POST, 'nomeusuario');
$jogosbool = $_POST['jogos'] == '1'? '1' : '0' ;
$espbool = $_POST['esportes'] == '1'? '1' : '0' ;
$notbrbool = $_POST['noticiasbr'] == '1'? '1' : '0' ;
$livbool = $_POST['livros'] == '1'? '1' : '0' ;
$filbool = $_POST['filmes'] == '1'? '1' : '0' ;
$notintbool = $_POST['noticiasint'] == '1'? '1' : '0' ;

$sql = "INSERT INTO `tb_recom` (`id`, `username`, `jog`, `espor`, `notbr`, `livr`, `filmes`, `notint`) VALUES ('0', '$username', '$jogosbool', '$espbool', '$notbrbool', '$livbool', '$filbool', '$notintbool')";
if ($con->query($sql)){
echo "Seus intereses foram salvos com sucesso";
}
$con->close();
?>
