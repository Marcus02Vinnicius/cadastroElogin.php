<?php

include_once("conexao.php");

$nome  = $_POST['cadNome'];
$email = $_POST['cadEmail'];
$senha = md5($_POST['cadSenha']);


if($nome == "" || $nome ==  null){
   echo "O campo nome deve ser preenchido";
}else if ($email == "" || $email ==  null){
    echo "O campo email é obrigatório";
}else if ($senha == "" || $senha ==  null) {
    echo "O campo senha é obrigatório";
}else{
    header('Location: secondPage.php');
    $sql = "INSERT INTO `usuarios` (nome, email, senha) VALUES ('$nome', '$email', '$senha');";

    $salvar = mysqli_query($conexao, $sql);
}

mysqli_close($conexao);

?>
