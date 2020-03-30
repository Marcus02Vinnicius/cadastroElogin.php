<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Tela Inicial</title>
</head>
<body>

    <img id="fundo"src="images/fundoNew.png">

    <section class="form">
            <div id="formLogin" >
                <h2>Login</h2>
                <div id="teste"  >
                    <form action="processaLogin.php" method="POST">
                        <p>
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                        </p>
                        <p>
                            <input type="password" name="senha" id="senha" placeholder="Senha" required>
                        </p>
                        <input class="btn" type="submit" value="Login">
                    </form>
                </div>  
            </div>

            
        <div id="formCadastro" class="hide">
            <form action="processaCadastro.php" method="POST">
                <h2>Cadastre-se</h2>
                <p>
                    <input type="text" name="cadNome" id="cadNome" placeholder="Nome" required>
                </p>
                <p>
                    <input type="email" name="cadEmail" id="cadEmail" placeholder="E-mail" required>
                </p>
                <p>
                    <input type="password" name="cadSenha" id="cadSenha" placeholder="Senha" required>
                </p>
                <input class="btn"type="submit" value="Cadastrar">    
            </form>
        </div>
    </section>

    <footer>Design by <spam>Marcus Vinnicius</spam></footer>
    <script src="script.js"></script>
</body>
</html>