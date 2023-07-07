<?php
include("conecta.php");

if (isset($_POST['inserir'])) {
    if (isset($_POST['morto'])) {
        $situacao = $_POST['morto'];
    } elseif (isset($_POST['vivo'])) {
        $situacao = $_POST['vivo'];
    } elseif (isset($_POST['grave'])) {
        $situacao = $_POST['grave'];
    } else {
        echo "Por favor, selecione uma opção de situação.";
        exit;
    }

    $comando = $pdo->prepare("INSERT INTO situacao(paciente) VALUES('$situacao')");
    $resultado = $comando->execute();
    // header("Location: check3.php");

    echo "Situação do paciente inserida com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check3.php" method="post">
        Morto
        <input type="checkbox" name="morto" value="morto"> 
        Vivo
        <input type="checkbox" name="vivo" value="vivo"> 
        Grave
        <input type="checkbox" name="grave" value="grave"> 
        <input type="submit" name="inserir" value="inserir">
    </form>     
</body>
</html>
