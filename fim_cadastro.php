<!DOCTYPE html>
<html>
    <head>
        <title>Fim do Cadastro</title>
</Head>
<body>
    <?php
    echo "Nome: " . htmlspecialchars($_POST['Nome']) . "<br>";
    echo "Sexo: " . htmlspecialchars($_POST['Sexo']) . "<br>";
    echo "Senha: " . htmlspecialchars($_POST['Senha']) . "<br>";
    echo "Comentario: " . htmlspecialchars($_POST['Comentario']) . "<br>";
    ?>
</body>
</html>    
