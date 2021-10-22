<?php
//busca a conexão no arquivo criado
require_once 'db_connect.php';

//inicia uma sessão
session_start();

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Tela de Login</title>
    <link href="CSS/estilo.css" rel="stylesheet">
    <link rel="icon" href="IMAGENS/icone.png">
</head>

<body>
    <div class="box">
        <h1>Vida Cerealista</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="Usuário" name="usuario">
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Senha" name="senha">
            </div>
            <input type="submit" name="btn_acessar" value="ACESSAR">
        </form>

    </div>
</body>

</html>