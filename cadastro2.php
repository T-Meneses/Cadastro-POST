<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro 2</title>
    </head>
    <body>
        <form2 action="fim_cadastro.php" method="post">
            Senha:<imput type="password" name= "senha" required minlength="5"><br>
            Comentario: <textarea name="comentario" cols="30" rows="6"></textarea><br>
            <imput type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
            <imput type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>">
            <imput type="submit" value="Finalizar Cadastro">
</form2>
</body>
</html>