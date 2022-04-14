<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<?php 

$acao = $_GET['acao'] ?? 'listar';

if($acao == 'cadastrar') :
    require('controllers/db.controller.php');
elseif($acao == 'cadastro') :
    require("views/cadastrar.view.php");
elseif($acao == 'erro-campos') :
    echo "Preencha todos os campos!";
    require("views/cadastrar.view.php");
elseif($acao == 'erro-cpf') :
    echo "Cpf incompatível!";
    require("views/cadastrar.view.php");
elseif($acao == 'listar') :
    require("controllers/db.controller.php");
elseif($acao == 'filtrar') :
    require("controllers/db.controller.php");
endif;

?>
</body>
</html>
