<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diciplinas - Curso Técnico Mário Braga</title>
    <link rel="stylesheet" href="Matérias.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="Icon" href="https://cdn-icons-png.flaticon.com/512/2847/2847502.png">
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
        <nav class="idces">
            <ul>
                <li><a href="index.php" class="i"><img class="iimg" src="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png" alt="">Início</a></li>
                <li><a href="Matérias.php" class="d"><img class="dimg" src="https://cdn-icons-png.flaticon.com/512/2847/2847502.png" alt="">Diciplinas</a></li>
                <li><a href="Curso.php" class="c"><img class="cimg" src="https://cdn-icons-png.flaticon.com/512/10278/10278115.png" alt="">Curso</a></li>
                <li><a href="Escola.php" class="e"><img class="eimg" src="https://cdn-icons-png.flaticon.com/512/2602/2602414.png" alt="">Colégio</a></li>
                <li><a href="Sobre.php" class="s"><img class="simg" src="https://cdn-icons-png.flaticon.com/512/4752/4752582.png" alt="">Sobre</a></li>
            </ul>
        </nav>
    </header>
</div>
    <img class="Logo" src="https://cdn-icons-png.flaticon.com/512/2847/2847502.png" alt="Logo">
    <h1>Diciplinas:</h1>
        <ul class="cnt">
            <li><h2>Ciência da Computação</h2></li>
                <p>É a ciência que estuda métodos, técnicas, instrumentos computacionais e aplicações tecnológicas para desenvolver processamentos de dados. </p>
            <li><h2>Programação Front-end</h2></li>
                <p>É a implementação de web designs utilizando linguagens de programação como HTML, CSS e JavaScript.</p>
            <li><h2>Programação Mobile</h2></li>
                <p>É a criação de aplicativos para dispositivos que utilizam algum tipo de sistema operacional móvel.</p>
            <li><h2>Banco de Dados</h2></li>
                <p>É a projeção de um conjunto de dados que se relacionam entre si.</p>
            <li><h2>Análise e Projeto de Sistemas</h2></li>
                <p>É onde são obtidos e organizados os dados para resolver um problema.</p>
        </ul>
    <div class="Pé">
        <footer>
            <img class="Logofoot" src="https://images.vexels.com/media/users/3/224233/isolated/lists/d5ee0e9c87bb54cf867d7fb89c4570b8-logotipo-da-educacao-online.png" alt="LogoPé">
            <h3>Todos os direitos reservados ao colégio Mário Braga©</h3>
        </footer>
    </div>
</body>
</html>