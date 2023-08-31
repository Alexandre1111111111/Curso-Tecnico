<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - Curso Técnico Mário Braga</title>
    <link rel="stylesheet" href="Siga.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="Icon" href="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png">
</head>
<body>
<script src="Script.js"></script>
<div class="Cabeçalho">
    <header>
    <a href="index.php"> <img class="Voltar" src="https://cdn-icons-png.flaticon.com/512/9073/9073020.png" alt="Logohead"></a></img>
    <a href="Cadastro.php">
        <button type="button" class="Cadastrar">Cadastrar-se</button>
        </a>
        <div class="Eng">
        <button type="button" id="config" onclick="Dropbox()" class="sett"><img id="Cog" src="https://cdn-icons-png.flaticon.com/512/6645/6645225.png" alt=""></button>
        <div class="drop" id="Box">
            <a href="FeedBack.php">FeedBack</a>
            <a href="Config.php">Configurações</a>
        </div>
    </header>
</div>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" id="evrform" onmouseover="formevr()" onmouseout="formevrbdr()" class="cds">
    <h1>Entrar</h1>
    <h2><label for="nome">Nome</label></h2>
    <div class="Nome">
        <input type="text" id="nome" size="40" name="usuario" maxlength="30" required placeholder="Digite seu Nome">
    </div>
        <h2><label for="email"></label>E-mail</h2>
    <div class="Conta">
        <input type="email" id="email" name="email" pattern="+.com" required size="40" placeholder="Digite o E-mail">
    </div>
        <h2><label for="pass"></label>Senha</h2>
    <div class="Senha">
        <input type="password" id="senha" name="senha" size="40" minlength="4" required maxlength="35" autocomplete="off" placeholder="Digite a Senha">
    </div>
    <hr class="Linha" id="linha1">
    <div class="Siga">
        <input type="submit" id="entrar" name="entrar" value="Entrar">
    </div>
    <hr class="Linha" id="linha2">
    <div class="seg">
        <label for="seguir">Ainda não possuí uma conta? <a href="Cadastro.php">Cadastre-se!</a></label>
    </div>
</form>
<?php
include("Banco.php");
if(isset($_POST['entrar'])){
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["senha"] = $_POST["senha"];

header("Location: index.php");

}
mysqli_close($conn);
?>
</body>
</html>