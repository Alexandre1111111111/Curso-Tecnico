<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colégio Mário Braga</title>
    <link rel="stylesheet" href="Escola.css">
    <style class="stylesheet"></style>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="Icon" href="https://cdn-icons-png.flaticon.com/512/2602/2602414.png">
</head>
<div class="Cabeçalho">
    <header>
        <a href="index.php"><img class="Logohead" src="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png" alt="Logohead"></a>
    </header>
    <header>
        <nav>
            <div class="Continuações">
                <a href="index.php">Início</a> <a href="Matérias.php">Diciplinas</a> <a href="Curso.php">Curso</a> <a href="Sobre.php">Sobre</a>
                </div>
        </nav>
        <?php
        if($_SESSION){
            echo $_SESSION["usuario"];
            }
            ?>
    </header>
    <header class="Entrar">
    <button><a style="text-decoration: none;" class="Cadastrar" href="Cadastro.php">Cadastrar-se</a></button> <button><a style="text-decoration: none;" class="Seguir" href="Siga.php">Entrar</a></button>
    </header>
        
</div>
<body>
    <nav>
    <img src="https://cdn-icons-png.flaticon.com/512/2602/2602414.png" alt="Logo">
    </nav>
    <h1>Sobre o Colégio Mário Braga</h1>
    <p>O Colégio Estadual Mário Brandão Texeira Braga está localizado na cidade de Piraquara no interior do Paraná, a escola abrange turmas do ensino fundamental (6º ao 9º ano) e ensino médio (1º ao 3º ano), contendo também alguns cursos integrados no ensino médio, como o Técnico de Análise e desenvolvimento de Sistemas, que é o tópico deste site.</p>
    <div class="Pé">
        <footer>
            <img class="Logofoot" src="https://images.vexels.com/media/users/3/224233/isolated/lists/d5ee0e9c87bb54cf867d7fb89c4570b8-logotipo-da-educacao-online.png" alt="LogoPé">
            <h3>Todos os direitos reservados ao colégio Mário Braga©</h3>
        </footer>
    </div>
</body>
</html>