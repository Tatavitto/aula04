<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostra</title>
</head>
<body>
<?php
include('recebe.php');
    
    $aluno = unserialize($_SESSION['aluno']);

    echo $aluno->exibirInformacoes();
?>
</body>
</html>