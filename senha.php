<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="senha.css">
</head>
<body>
  

<div class="container">

    <form action="cadastrar_action.php" method="post">

            <h4>Para terminar o cadastro basta fazer a sua senha</h4>
            <div class="area_senha">

                

                <div class="campo">
                    <label>Senha</label>
                    <input type="text" placeholder="Insira a senha do seu cadastro" name="senha">
                </div>
                <div class="campo">
                    <label>Confirmar senha</label>
                    <input type="text" placeholder="Confirme a sua senha" name="c_senha">
                </div>
                <div class="confirm">

                    <input class="conf" type="submit" value="Confirmar" name="s_salva">
                </div>

            </div>
    </form>



</div>





</body>
</html>