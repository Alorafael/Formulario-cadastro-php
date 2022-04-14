<?php
    require_once("./db.php");
    $bd = Database::get();
    $acao = $_GET['acao'] ?? 'listar';
   
    $filtro = $_POST['filtro'] ?? '';

    $nome = $_POST['nome'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $dt_nasc = $_POST['dt_nasc'] ?? '';
    $cep = $_POST['cep'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $rua = $_POST['rua'] ?? '';
    $bairro = $_POST['bairro'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if($acao == 'listar') :
        $query = $bd->prepare("SELECT * FROM usuarios");
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
        require("./views/listar.view.php");
    elseif($acao == 'filtrar') :
        $query = $bd->prepare("SELECT * FROM usuarios WHERE cpf='$filtro' OR nome='$filtro'");
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
        require("./views/listar.view.php");
    elseif($acao == 'cadastrar') :
        if($nome=='' || $cpf=='' || $email=='' || $telefone=='' || $dt_nasc=='' || $cep=='' || $cidade=='' || $rua=='' || $bairro==''
        || $numero=='' || $senha=='') :
            header('Location: ./index.php?acao=erro-campos');
        elseif(strlen($cpf) != 11) :
            header('Location: ./index.php?acao=erro-cpf');
        else :
            $query = $bd->prepare("INSERT INTO usuarios(nome, cpf, email, telefone, dt_nasc, cep, cidade, rua, bairro, numero, senha) 
                                  VALUES(:nome, :cpf, :email, :telefone, :dt_nasc, :cep, :cidade, :rua, :bairro, :numero, :senha)");
            $query->bindParam(':nome', $_POST['nome']);
            $query->bindParam(':cpf', $_POST['cpf']);
            $query->bindParam(':email', $_POST['email']);
            $query->bindParam(':telefone', $_POST['telefone']);
            $query->bindParam(':dt_nasc', $_POST['dt_nasc']);
            $query->bindParam(':cep', $_POST['cep']);
            $query->bindParam(':cidade', $_POST['cidade']);
            $query->bindParam(':rua', $_POST['rua']);
            $query->bindParam(':bairro', $_POST['bairro']);
            $query->bindParam(':numero', $_POST['numero']);
            $query->bindParam(':senha', $_POST['senha']);
            $query->execute();
            header("Location: ./index.php?acao=listar");
        endif;
    endif;
?>