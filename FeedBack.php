<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="FeedBack.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <title>FeedBack - Curso Técnico Mário Braga</title>
    <link rel="Icon" href="https://cdn-icons-png.flaticon.com/512/1828/1828614.png">
</head>
<body>
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
<form action="" method="post" id="feed" onmouseover="feedbrd()" onmouseout="feedbrdback()" class="cds">
        <h1>FeedBack</h1>
        <label class="rt" for="rate">Avalie a sua experiência com o site:</label>
        <hr class="Linha" id="l1">
        <div class="str">
            <button type="button" onclick="actstr1()"><img id="str1" src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png" alt=""></button>
            <button type="button" onclick="actstr12()"><img id="str2" src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png" alt=""></button>
            <button type="button" onclick="actstr123()"><img id="str3" src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png" alt=""></button>
            <button type="button" onclick="actstr1234()"><img id="str4" src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png" alt=""></button>
            <button type="button" onclick="actstr12345()"><img id="str5" src="https://cdn-icons-png.flaticon.com/512/1828/1828970.png" alt=""></button>
        </div>
        <hr class="Linha" id="l2">
        <div class="evr">
        <input type="submit" name="enviar" id="enviar" onclick="verify()" value="Enviar">
        </div>
        <div class="res">
            <input type="reset" name="resetar" id="reset" value="Redefinir" onclick="redef()">
        </div>
    </form>
</body>
</html>