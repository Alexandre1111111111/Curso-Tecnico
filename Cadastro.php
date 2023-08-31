<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>Cadastro - Curso Técnico Mário Braga</title>
    <link rel="stylesheet" href="Cadastro.css">
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
    <a href="Siga.php">
        <button type="button" class="Seguir">Entrar</button>
        </a>
        <div class="Eng">
        <button type="button" id="config" onclick="Dropbox()" class="sett"><img id="Cog" src="https://cdn-icons-png.flaticon.com/512/6645/6645225.png" alt=""></button>
        <div class="drop" id="Box">
            <a href="FeedBack.php">FeedBack</a>
            <a href="Config.php">Configurações</a>
        </div>
    </header>
</div>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" id="cdsform" onmouseover="formback()" onmouseout="formbdr()" class="cds">
    <h1>Cadastrar</h1>
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
    <hr class="Linha" id="li1">
    <div class="chbox">
        <input type="checkbox" id="check" name="cbox" required>
        <label class="term" for="check">Eu li e aceito os <a href="">termos e serviços</a>.</label>
    </div>
    <hr class="Linha" id="li2">
    <div class="Cadastrar">
        <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
    </div>
    <div class="seg">
        <label for="seguir">Já possuí uma conta? <a href="Siga.php">Siga!</a></label>
    </div>
</form>
<?php
    include("Banco.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["senha"] = $_POST["senha"];
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