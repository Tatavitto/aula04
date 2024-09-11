<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>'Formulário'</title>
</head>
<body>
   
    <form action="mostra.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        
        <label for="sobrenome">Último nome:</label>
        <input type="text" name="sobrenome" id="sobrenome">
        
        <label for="dataNascimento">Data de nascimento:</label>
        <input type="date" name="dataNascimento" id="dataNascimento">
        
        <label for="matricula">Matrícula:</label>
        <input type="number" name="matricula" id="matricula">
        
        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>