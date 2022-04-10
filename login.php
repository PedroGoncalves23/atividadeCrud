<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form-login " action="index.php" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                </div>
                
                <div class="form-label-group">
                    <label for="inputLogin">Email</label>
                    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Login" required autocomplete="off">

                </div>

                <div class="form-label-group">
                    <label for="inputSenha">Senha</label>
                    <input type="text" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required autocomplete="off">
                </div>

                <div class="btn">
                    <button id="btn" type="submit">Logar</button>
                </div>
                <div class="cadastro" id="cadastro">
                    <a href="cadastroTela.php">Cadastrar</a>
                </div>
            </div>
        </div>
    </form>

</body>

</html>