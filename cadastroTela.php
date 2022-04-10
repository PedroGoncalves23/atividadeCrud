<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styleCad.css">
</head>

<body>
    <form class="form-cad " action="cad.php" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                </div>
                <div class="form-label-group">
                    <label for="inputLogin">Nome</label>
                    <input type="nome" name="nome" id="nome" class="form-control" placeholder="Nome:" required autocomplete="off">
                </div>

                <div class="form-label-group">
                    <label for="inputSenha">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email" required autocomplete="off">
                </div>

                <div class="form-label-group">
                    <label for="inputSenha">Senha</label>
                    <input type="senha" name="senha" id="senha" class="form-control" placeholder="Senha:" required autocomplete="off">
                </div>

                <div class="form-label-group">
                    <label for="inputSenha">Tel</label>
                    <input type="tel" name="tel" id="tel" class="form-control" placeholder="Tel:" required autocomplete="off">
                </div>

                <div class="form-label-group">
                    <label for="inputLogin">Cpf</label>
                    <input type="cpf" name="cpf" id="cpf" class="form-control" placeholder="CPF:" required autocomplete="off">
                </div>
                <div class="btn">
                    <button id="btn" type="submit">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html> 