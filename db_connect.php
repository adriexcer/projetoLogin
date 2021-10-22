<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "projeto_vidac";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) {
    echo "Falha na conexão: " . mysqli_connect_error();
}

if (isset($_POST['btn_acessar'])) {
    $erros = array();
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($usuario) || empty($senha)) {
        $erros[] = "O campo Login/Senha precisa ser preenchido";
    } else {
        $sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
        $result = mysqli_query($connect, $sql);
        //verificando se usurio e senha está cadastrados no banco        
        if (mysqli_num_rows($result) > 0) {
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            $result = mysqli_query($connect, $sql);
            //confimo os dados do usuario para direcionar a pagina restrita
            if (mysqli_num_rows($result) == 1) {
                $dados = mysqli_fetch_array($result);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            } else {
                $erros[] = "Usuário e senha não conferem";
            }
        } else {
            $erros[] = "Usuário inexistente";
        }
    }
}
if (!empty($erros)) {
    foreach ($erros as $erro) {
        echo "<script language='javascript' type='text/javascript'> alert('$erro');window.location.href='login.php';</script>";
    }
}
