<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="Siga.css">
    <style class="stylesheet"></style>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="Banco.sql">
    <link rel="Icon" href="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png">
</head>
<div class="Cabeçalho">
    <header class="Back">
        <a href="index.php"> <img class="Voltar" src="https://cdn-icons-png.flaticon.com/512/2879/2879564.png" alt="Logohead"></a></img>
    </header>
    <header class="Entrar">
        <button><a style="text-decoration: none;" class="Cadastrar" href="Cadastro.php">Cadastrar-se</a></button>
    </header>

</div>
<body>
    <h1>Entrar</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
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
    <hr class="Linha">
    <div class="Siga">
        <input type="submit" id="entrar" name="entrar" value="entrar">
    </div>
</form>
<?php
if(isset($_POST['entrar'])){

    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["senha"] = $_POST["senha"];

header("Location: index.php");

}
?>
</body>
</html>