<?php
	
	session_start();

	include_once("conexao.php");

	$usuario = mysqli_real_escape_string($conexao, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $senha = md5($senha);

    $qtdChar = strlen($senha)
    

    if ($qtdChar < 8 ) {
        echo("A senha deve ser maior que 8 caracteres")
        session_destroy();
    }
    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $query = "SELECT * FROM usuarios WHERE email = '$usuario' AND senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conexao, $query);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if(isset($resultado)){
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioEmail'] = $resultado['email'];        
        $_SESSION['usuarioSenha'] = $senha;

        header('Location: secondPage.php');

    }else{
    	$_SESSION["loginErro"] = "Usuário ou senha invalidos!";
        
        echo  'Erro no login!';
     	header("location: index.php");
    }

?>