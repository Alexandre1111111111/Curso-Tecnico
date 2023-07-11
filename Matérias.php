<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diciplinas</title>
    <link rel="stylesheet" href="Matérias.css">
    <style class="stylesheet"></style>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="Icon" href="https://cdn-icons-png.flaticon.com/512/2847/2847502.png">
</head>
<div class="Cabeçalho">
    <header>
        <a href="index.php"><img class="Logohead" src="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png" alt="Logohead"></a>
    </header>
    <header>
        <nav>
            <div class="Continuações">
                <a href="index.php">Início</a> <a href="Curso.php">Curso</a> <a href="Escola.php">Colégio</a> <a href="Sobre.php">Sobre</a>
            </div>
        </nav>
        <?php
        if($_SESSION){
            echo $_SESSION["usuario"];
            }
            ?>
    </header>
    <header class="Cadastro">
        <button><a style="text-decoration: none;" class="Cadastrar" href="Cadastro.php">Cadastrar-se</a></button> <button><a style="text-decoration: none;" class="Seguir" href="Siga.php">Entrar</a></button>
    </header>
</div>
<body>
    <nav>
    <img class="Logo" src="https://cdn-icons-png.flaticon.com/512/2847/2847502.png" alt="Logo">
    </nav>
    <h1>Diciplinas:</h1>
    <nav>
        <ul>
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
    </nav>
    <div class="Pé">
        <footer>
            <img class="Logofoot" src="https://images.vexels.com/media/users/3/224233/isolated/lists/d5ee0e9c87bb54cf867d7fb89c4570b8-logotipo-da-educacao-online.png" alt="LogoPé">
            <h3>Todos os direitos reservados ao colégio Mário Braga©</h3>
        </footer>
    </div>
</body>
</html>