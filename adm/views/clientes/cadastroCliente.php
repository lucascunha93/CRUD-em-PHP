      <!-- Conteúdo -->

<div class="container col-md-6 col-md-offset-3 conteudo">
    <h1>Cadastro de Cliente </h1>
    <div class="cad">
        <form action="?c=c&a=ic" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress">Endereço:</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Av. Rio Branco">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">E-mail:</label>
                    <input type="email" class="form-control" name="email" placeholder="example@example.com">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Telefone:</label>
                    <input type="text" class="form-control" name="telefone" placeholder="ex: (xx) x xxxx xxxx">
                </div>
                <div class="form-group col-md-4">
                    Arquivo: <input type="file" name="foto"><br>
                </div>
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary ">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

    <!-- Fim Conteúdo -->