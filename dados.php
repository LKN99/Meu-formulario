<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    $get = $_POST["nSexo"];
    $get2 = $_POST["cNome"];
    $get3 = $_POST["cSenha"];
    $get4 = $_POST["Data_nasc"];
    $post = isset($_POST["men"])?$_POST["men"]:null;
    
$data = ($get4>2006)?"MENOR DE IDADE":"MAIOR DE IDADE";
$data2 = 2024-$get4;
    echo("<h1>DADOS DO USUARIO:</h1>");
    echo("<h3>nome: $get2 <br/> senha: $get3 <br/> sexo: $get <br/><hr> Data: $get4 <br/> Idade: $data2 <br/> $data</h3>");
    echo("Opinião de $get2: $post");
    echo("<br/>");
    if ($data2 <= 10 or $data2 >= 100)
        echo("FORMATO DE IDADE INVALIDA");

    ?>
    <br><a href="formulario.html"><h2>!Voltar!</h2></a>
</body>
</html>