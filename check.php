<?php
include("conecta.php");

if (isset($_POST["inserir"])) {
    if (isset($_POST['checkbox1'])) {
        $checkbox1 = 1;
        $checkbox1_label = "Homem";
    } else {
        $checkbox1 = 0;
        $checkbox1_label = "";
    }

    if (isset($_POST['checkbox2'])) {
        $checkbox2 = 1;
        $checkbox2_label = "Mulher";
    } else {
        $checkbox2 = 0;
        $checkbox2_label = "";
    }

    if (isset($_POST['checkbox3'])) {
        $checkbox3 = 1;
        $checkbox3_label = "Trans";
    } else {
        $checkbox3 = 0;
        $checkbox3_label = "";
    }

    $comando = $pdo->prepare("INSERT INTO agenda (checkbox1, checkbox2, checkbox3) VALUES (?, ?, ?)");
    $resultado = $comando->execute([$checkbox1, $checkbox2, $checkbox3]);
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
    <form action="check.php" method="post">
        <input type="checkbox" name="checkbox1" id="checkbox1"> 
        <input type="checkbox" name="checkbox2" id="checkbox2"> 
        <input type="checkbox" name="checkbox3" id="checkbox3"> 
        <input type="submit" name="inserir" value="inserir">
    </form>

    <?php
    if (isset($_POST["inserir"])) {
        echo "<p>Checkbox 1: " . $checkbox1_label . "</p>";
        echo  $checkbox2_label . "</p>";
        echo  $checkbox3_label . "</p>";
    }
    ?>
</body>
</html>
