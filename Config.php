<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações - Curso Técnico Mário Braga</title>
    <link rel="stylesheet" href="Config.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="Icon" href="https://cdn-icons-png.flaticon.com/512/3876/3876036.png">
</head>
<body id="settbody">
<script src="Script.js"></script>
<div class="Cabeçalho">
    <header>
    <a href="index.php"> <img class="Voltar" src="https://cdn-icons-png.flaticon.com/512/9073/9073020.png" alt="Logohead"></a></img>
        <a href="Cadastro.php">
        <button type="button" class="Cadastrar">Cadastrar-se</button>
        </a>
        <a href="Siga.php">
        <button type="button" class="Seguir">Entrar</button>
        </a>
        <div class="Eng">
        <button type="button" id="config" onclick="Dropbox()" class="sett"><img id="Cog" src="https://cdn-icons-png.flaticon.com/512/6645/6645225.png" alt=""></button>
        <div class="drop" id="Box">
            <a href="FeedBack.php">FeedBack</a>
            <a href="Config.php">Configurações</a>
        </div>
        </div>
    </header>
</div>
<div class="cds" id="sett" onmouseover="settbdr()" onmouseout="settlinbdr()">
<h1>Configurações</h1>
<hr class="Linha" id="lin1">
<label class="lin" for="lan">Linguagem
  <select name="linguagens" id="linguagens">
    <option lang="pt-br" value="Português" selected>Português</option>
    <option lang="en" value="Inglês">Inglês</option>
    <option lang="fr" value="Francês">Francês</option>
    <option lang="sp" value="Espanhol">Espanhol</option>
    <option lang="de" value="Alemão">Alemão</option>
  </select>
</label>
<hr class="Linha" id="lin2">
<label class="des" for="desemp">Modo Desempenho
<label class="switch">
  <input type="checkbox" id="dsp">
  <span class="slider"></span>
</label>
</label>
<hr class="Linha" id="lin3">
<label class="nt" for="ntf">Receber Notificações
<label class="switch">
  <input type="checkbox" id="not">
  <span class="slider"></span>
</label>
</label>
<hr class="Linha" id="lin4">
<div class="cha">
<input type="button" id="save" onclick="salvarm()" value="Salvar">
</div>
<div class="rdf">
  <input type="button" id="redef" onclick="redefm()" value="Redefinir">
</div>
</div>
</body>
</html>