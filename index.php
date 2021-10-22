<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>HubEx</title>
  <link rel="stylesheet" type="text/css" href="cssex.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="java.js"></script>
</head>

<body id="background" onload='fundoinicial()'>
  <div class="sidecont">

    <button class="botaoside" onclick="abrirbarra()">
      <button id="myBtn" class="botaocad">Cadastro</button>
      </center>
  </div>
  <div class="pesquisa">
    <iframe src="https://duckduckgo.com/search.html?prefill=Search DuckDuckGo" style="overflow:hidden;position:relative; margin:0;padding:0;width:100%;height:70px;" frameborder="0"></iframe>
  </div>
  </center>
  <div class="header1">
    <center>
      <p class="header1text">Sites Recomendados</p>
    </center>
  </div>
  <div id="myModal" class="modal">
    <div class="content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Nos forneça algumas informações</h2>
      </div>
      <form method="post" action="enviar.php">
        <h3>Insira seu Nome de Usuário</h3>
        <input type="name" name="nomeusuario">
        <h4>Interesses:</br></h4>
        <table class="center">
          <tr>
            <td>
              <input type="checkbox" name="jogos" value="1">Jogos
            </td>
            <td>
              <input type="checkbox" name="esportes" value="1">Esportes
            </td>
            <td>
              <input type="checkbox" name="noticiasbr" value="1">Notícias Brasileiras
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" name="livros" value="1">Livros
            </td>
            <td>
              <input type="checkbox" name="filmes" value="1">Filmes
            </td>
            <td>
              <input type="checkbox" name="noticiasint" value="1">Notícias Internacionais
            </td>
          </tr>
        </table>
        </br>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>
  <div class="sitesrec">
    <a href="https:\\www.youtube.com"><img class="imag" src="logos\Logo_oficial_de_YouTube.jpg" alt="Youtube"></a>
    <a href="https:\\www.facebook.com"><img class="imag" src="logos\facelogo.jpg" alt=""></a>
    <a href="https:\\www.twitter.com"><img class="imag" src="logos\twitter.jpg" alt=""></a>
    <a href="https:\\www.reddit.com"><img class="imag" src="logos\reddit.jpg" alt=""></a>
    <a href="http:\\calajese.duckdns.org:9009/tt-rss/"><img class="imag" src="logos/favicon-512px.jpg" alt=""></a>
  </div>
  <div class="header1">

    <center>
      <p class="header1text">Sites Favoritos</p>
    </center>
    <a style="color: white;text-decoration: none" type="button" class="addSite" name="" id="" href='addSite.php'><i class="fa fa-plus-circle"></i>&nbspAdicionar site</a><br>
    <br>
    <input type="radio" id="icones" name="visualizacao" value="icones" checked>
    <label for="icones">Ícones</label>
    <input type="radio" id="nomes" name="visualizacao" value="nomes">
    <label for="nomes">Nomes</label>
    <br>
    <br>
    <div class="sitesrec">

      <!--Tentando alterar o display-->
      <?php
      require_once 'conexao.php';
      $sql = "SELECT nome, urls, img FROM sitesfav;";
      $result = $con->query($sql);
      $display = "nomes";
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          if ($display == "icones") {
            echo '
        <a style="text-decoration:none;color:black;" href="' . $row['urls'] . '"><img class="" src="' . $row['img'] . '"></a>';
          } else if ($display == "nomes") {
            echo '
            <a style="text-decoration:none;color:black;" href="' . $row['urls'] . '"> ' . $row['nome'] . ' </a><br><br>';
          }
        }
      }
      $con->close();
      ?>
    </div>
    <div class="sidebar" id="barralateral">
      <button class="botaofechar" onclick="fecharbarra()">X</button>
      <p class="titulo"> OPÇÕES </p><br>
      <ul class="sideopcao">
        <li><img class="ico" onclick="mudarfundo1()" id="img1" src="imgs/1033462.jpg" alt=""></li>
        <li><img class="ico" onclick="mudarfundo0()" id="img1" src="imgs/background3840x2160.jpg" alt=""></li>
        <li><img class="ico" onclick="mudarfundo2()" id="img1" src="imgs/anime_bg.jpg" alt=""></li>
        <li><img class="ico" onclick="mudarfundo3()" id="img1" src="imgs/bg_2.jpg" alt=""></li>
        <li><img class="ico" onclick="mudarfundo4()" id="img1" src="https://i0.wp.com/gamelogia.com.br/wp-content/uploads/2016/11/gamer.jpg?resize=1280%2C640&ssl=1" alt=""></li>
      </ul>
    </div>
    <section class="container1" id="extrarea" onclick="fecharbarra()">
    </section>
    <script src="java.js"></script>
</body>

</html>