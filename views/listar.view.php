<div>
    <div> 
        <h1>Lista de cadastros</h1>
        <a href="./index.php?acao=cadastro">Fazer cadastro</a>
        <form action="./index.php?acao=filtrar" method="POST">
            <input type="text" name="filtro" placeholder="Digite nome ou cpf">
            <button>Filtrar</button>
        </form>
    </div>
    
    <?php if (sizeof($usuarios) == 0) : ?>
    <section>
        <p>Não há nenhum cadastro</p>
    </section>
    <?php else : ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th> <th>|</th>
                <th>CPF</th> <th>|</th>
                <th>E-mail</th> <th>|</th>
                <th>Telefone</th> <th>|</th>
                <th>Data de nascimento</th> <th>|</th>
                <th>CEP</th> <th>|</th>
                <th>Cidade</th> <th>|</th>
                <th>Rua</th> <th>|</th>
                <th>Bairro</th> <th>|</th>
                <th>Número</th> <th>|</th>
                <th>Senha</th> <th>|</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) : ?>
                <tr>
                    <td><?= $usuario->nome; ?></td> <td>|</td>
                    <td><?= $usuario->cpf; ?></td> <td>|</td> 
                    <td><?= $usuario->email; ?></td> <td>|</td>
                    <td><?= $usuario->telefone; ?></td> <td>|</td>
                    <td><?= $usuario->dt_nasc; ?></td> <td>|</td>
                    <td><?= $usuario->cep; ?></td> <td>|</td>
                    <td><?= $usuario->cidade; ?></td> <td>|</td>
                    <td><?= $usuario->rua; ?></td> <td>|</td>
                    <td><?= $usuario->bairro; ?></td> <td>|</td>
                    <td><?= $usuario->numero; ?></td> <td>|</td>
                    <td><?= $usuario->senha; ?></td> <td>|</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</div>