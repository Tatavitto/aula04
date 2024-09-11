<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recebe</title>
</head>
<body>
<?php
include('aluno.php');
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNascimento = $_POST['dataNascimento'];
    $matricula = $_POST['matricula'];
$aluno = new Aluno($nome, $sobrenome, $dataNascimento, $matricula);
$aluno = serialize($aluno);
session_start();

$_SESSION['aluno'] = $aluno;

?>
</body>
</html>