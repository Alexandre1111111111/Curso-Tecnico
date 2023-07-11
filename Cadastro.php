<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="Cadastro.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="Icon" href="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-logotipo-da-escola-online.png">
</head>
<div class="Cabeçalho">
    <header class="Back">
    <a href="index.php"> <img class="Voltar" src="https://cdn-icons-png.flaticon.com/512/2879/2879564.png" alt="Logohead"></a></img>
    </header>
    <header class="Entrar">
    <button><a style="text-decoration: none;" class="Seguir" href="Siga.php">Entrar</a></button>
    </header>

</div>
<body>
<h1>Cadastrar</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2><label for="nome">Nome</label></h2>
    <div class="Nome">
        <input type="text" id="nome" size="40" name="usuario" maxlength="30" required placeholder="Digite seu Nome">
    </div>
        <h2><label for="email"></label>E-mail</h2>
    <div class="Conta">
        <input type="email" id="email" pattern="+.com" name="email" required size="40" placeholder="Digite o E-mail">
    </div>
        <h2><label for="pass"></label>Senha</h2>
    <div class="Senha">
        <input type="password" id="senha" size="40" name="senha" minlength="4" required maxlength="35" autocomplete="off" placeholder="Digite a Senha">
    </div>
        <h2><label for="passcon"></label>Confirmar Senha</h2>
    <div class="Confirmar">
        <input type="password" id="confirmar" size="40" name="confirmar" minlength="4" required maxlength="35" autocomplete="off" placeholder="Confirme a sua Senha">
    </div>
    <hr class="Linha">
    <div class="Cadastrar">
        <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
    </div>
</form>
<?php
    include("Banco.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (usuario, email, senha) VALUES ('$usuario', '$email', '$hash')";
        try{
        mysqli_query($conn, $sql);
        header("Location: index.php");
        }
        catch(mysqli_sql_exception){
            echo"Este email já existe";
        }
    }
    
    mysqli_close($conn);
?>
</body>
</html>