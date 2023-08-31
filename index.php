<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Técnico Mário Braga</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="Icon" href="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png">
</head>
<body>
<script src="Script.js"></script>
<div class="Cabeçalho">
    <header>
    <?php
    if($_SESSION){
    echo $_SESSION["usuario"];
    }
    ?>
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
    <div class="Icon">
        <img class="Main" onload="Carregar()" src="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png" alt="Logo">
    </div>
    <div class="Título">
        <h1>Curso Técnico Mário Braga</h1>
    </div>
        <div class="Introdução">
            <p>O colégio Mário Braga disponibiliza algumas diciplinas para o desenvolvimento técnico dos alunos</p>
        </div>
    <div class="Continuações">
        <a style="text-decoration: none;" href="Matérias.php">
            <button type="button" class="Dici">Diciplinas</button>
        </a>
        <a style="text-decoration: none;" href="Curso.php">
            <button type="button" class="Cur">Curso</button>
        </a>
        <a style="text-decoration: none;" href="Escola.php">
            <button type="button" class="Col">Colégio</button>
        </a>
        <a style="text-decoration: none;" href="Sobre.php">
            <button type="button" class="Sob">Sobre</button>
        </a>
    </div>
    <div class="Pé">
        <footer>
            <img class="Logofoot" src="https://images.vexels.com/media/users/3/224233/isolated/lists/d5ee0e9c87bb54cf867d7fb89c4570b8-logotipo-da-educacao-online.png" alt="LogoPé">
            <h3>Todos os direitos reservados ao colégio Mário Braga©</h3>
        </footer>
    </div>
<?php
    if($_SESSION){
        if(isset($_POST["logout"])){
            session_destroy();
            header("Location: Cadastro.php");
        }
    }
?>
</body>
</html>