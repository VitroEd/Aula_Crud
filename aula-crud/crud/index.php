<?php 
include("models/conexao.php");
include("views/blades/header.php");
?>

<?php
    $query = mysqli_query($conexao, "SELECT * FROM alunos");

    while($exibe = mysqli_fetch_array($query))
    {
    echo "O aluno " . "<b>" . $exibe[1] . "</b>" . " mora na cidade " . "<b>" . $exibe[2] . "</b>" ."<br>";
    }
?>

<?php
include("views/blades/footer.php");
?>