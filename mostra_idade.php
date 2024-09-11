<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);

include('recebe.php');
    
    $aluno = unserialize($_SESSION['aluno']);

    $n = $aluno->getNome();
    $i = $aluno->getIdade();

    echo "<div class='container mt-5'>";
    echo "<h2>Informações do Aluno</h2>";
    echo "<p>$n, $i anos</p>";
    echo "</div>";

    
?>

</body>
</html>