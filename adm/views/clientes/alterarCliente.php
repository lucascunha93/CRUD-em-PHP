<div class="container conteudo">
    <h3>Alterar Cliente</h3>
    <form action="?c=c&a=atc" method="POST">  
        <div class="form-group">
            <div>
                <label for="id">Id</label>
                <input type="text" class="form-control" name="id" value=" <?= $arrayClientes['idCliente'] ?> "readonly="readonly">
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value=" <?= $arrayClientes['nome'] ?> ">
            </div>
            <div>
                <label for="nome">Endereço</label>
                <input type="text" class="form-control" name="endereco" value=" <?= $arrayClientes['endereco'] ?> ">
            </div>
            <div>
                <label for="nome">Email</label>
                <input type="text" class="form-control" name="email" value=" <?= $arrayClientes['email'] ?> ">
            </div>
            <div>
                <label for="nome">Telefone</label>
                <input type="text" class="form-control" name="telefone" value=" <?= $arrayClientes['telefone'] ?> ">
            </div>
        </div>
        <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary ">Alterar cadastro</button>
        </div>
    </form>
</div>