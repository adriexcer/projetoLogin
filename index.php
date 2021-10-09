<?php
//busca a conexão no arquivo criado
require_once 'db_connect.php';

//inicia uma sessão
session_start();

//botão acessar
if(isset($_POST['btn_acessar'])){
    $erros = array();
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($usuario) || empty($senha)){
        $erros[] = "O campo Login/Senha precisa ser preenchido";
    }else
    {

    }   
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Tela de Login</title>
    <link href="CSS/estilo.css" rel="stylesheet">
</head>
<body>
<div class="box">
    <h1>Vida Cerealista</h1>    
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="inputBox">
            <input type="text" placeholder="Usuário" name="usuario">
        </div>
        <div class="inputBox">
            <input type="password" placeholder="Senha" name="senha">
        </div>
        <input type="submit" name="btn_acessar" value="ACESSAR">
    </form>
    
</div>

<form>
<?php
    if(!empty($erros)){
        foreach($erros as $erro){
            echo "<script language='javascript' type='text/javascript'> alert('$erro');window.location.href='index.php';</script>";
        }    
    }
    ?>  

</form>

</body>
</html>