    <header>
        <h1>Cadastro</h1>
        <p>Preencha as informações</p>
    </header>
    <form action="./index.php?acao=cadastrar" method="POST">
            <label>
                Nome Completo:<br> 
                <input type="text" name="nome">
            </label><br>
            <label>
                CPF:<br>
                <input type="text" name="cpf">
            </label><br>
            <label>
                E-mail:<br>
                <input type="email" name="email">
            </label><br>
            <label>
                Telefone:<br>
                <input type="number" name="telefone">
            </label><br>
            <label>
                Data de nascimento:<br>
                <input type="date" name="dt_nasc">
            </label><br>
            <label>
                CEP:<br>
                <input type="text" name="cep">
            </label><br>
            <label>
                Cidade:<br>
                <input type="text" name="cidade">
            </label><br>
            <label>
                Rua:<br>
                <input type="text" name="rua">
            </label><br>
            <label>
                Bairro:<br>
                <input type="text" name="bairro">
            </label><br>
            <label>
                Número:<br>
                <input type="number" name="numero">
            </label><br>
            <label>
                Senha:<br>
                <input type="password" name="senha">
            </label><br>
            <button>CADASTRAR</button>
    </form>