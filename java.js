var input = document.getElementById('fColor');
input.addEventListener('change', function () {
  var corTexto = input.value;
  var txtToChngClr = document.getElementsByClassName('toChngClr');
  for (var i = 0; i < txtToChngClr.length; i++) {
    txtToChngClr[i].style.color = corTexto;
    localStorage.setItem('textcolor', corTexto);
  }
});

function corfuncao() {
  var txtToChngClr = document.getElementsByClassName('toChngClr');
  for (var i = 0; i < txtToChngClr.length; i++) {
    var cor = localStorage.getItem('textcolor');
    txtToChngClr[i].style.color = cor;
  }
}

var modal = document.getElementById('myModal');
var btn = document.getElementById('myBtn');
var span = document.getElementsByClassName('close')[0];
btn.onclick = function () {
  modal.style.display = 'block';
  document.getElementById('barralateral').style.width = '0vw';
};

span.onclick = function () {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};
function abrirbarra() {
  document.getElementById('barralateral').style.width = '25vw';
}

function fecharbarra() {
  document.getElementById('barralateral').style.width = '0vw';
}
function fundoinicial() {
  const fundo = localStorage.getItem('bckgrndchc');
  if (fundo == 0) mudarfundo0();
  else if (fundo == 1) mudarfundo1();
  else if (fundo == 2) mudarfundo2();
  else if (fundo == 3) mudarfundo3();
  else if (fundo == 4) mudarfundo4();
  else mudarfundo0();
}
function mudarfundo0() {
  document.getElementById('background').style.background =
    'url(imgs/background3840x2160.jpg)';
  document.getElementById('background').style.backgroundRepeat = 'no-repeat';
  document.getElementById('background').style.backgroundAttachment = 'fixed';
  document.getElementById('background').style.transition = '0.7s';
  document.getElementById('background').style.backgroundSize = 'cover';
  localStorage.setItem('bckgrndchc', '0');
}

function mudarfundo1() {
  document.getElementById('background').style.background =
    'url(imgs/1033462.jpg)';
  document.getElementById('background').style.backgroundRepeat = 'no-repeat';
  document.getElementById('background').style.backgroundAttachment = 'fixed';
  document.getElementById('background').style.transition = '0.7s';
  document.getElementById('background').style.backgroundSize = 'cover';
  localStorage.setItem('bckgrndchc', '1');
}

function mudarfundo2() {
  document.getElementById('background').style.background =
    'url(imgs/anime_bg.jpg)';
  document.getElementById('background').style.backgroundRepeat = 'no-repeat';
  document.getElementById('background').style.backgroundAttachment = 'fixed';
  document.getElementById('background').style.transition = '0.7s';
  document.getElementById('background').style.backgroundSize = 'cover';
  localStorage.setItem('bckgrndchc', '2');
}

function mudarfundo3() {
  document.getElementById('background').style.background = 'url(imgs/bg_2.jpg)';
  document.getElementById('background').style.backgroundRepeat = 'no-repeat';
  document.getElementById('background').style.backgroundAttachment = 'fixed';
  document.getElementById('background').style.transition = '0.7s';
  document.getElementById('background').style.backgroundSize = 'cover';
  localStorage.setItem('bckgrndchc', '3');
}

function mudarfundo4() {
  document.getElementById('background').style.background =
    'url(https://i0.wp.com/gamelogia.com.br/wp-content/uploads/2016/11/gamer.jpg?resize=1280%2C640&ssl=1)';
  document.getElementById('background').style.backgroundRepeat = 'no-repeat';
  document.getElementById('background').style.backgroundAttachment = 'fixed';
  document.getElementById('background').style.transition = '0.7s';
  document.getElementById('background').style.backgroundSize = 'cover';
  localStorage.setItem('bckgrndchc', '4');
}

function autorun() {
  fundoinicial();
  corfuncao();
}
