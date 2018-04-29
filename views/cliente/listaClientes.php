    <!-- Conteúdo -->

<div class="container col-md-6 col-md-offset-3 conteudo">
        <div class="col-md-12 table-responsive">
                <h1 class="titulo_tabela">Cliente(s) cadastrados!</h1>
                <table class="table custab">
                        <thead>
                                <tr>
                                        <th>ID </th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Endereço</th>
                                        <th>Telefone</th>
                                </tr>
                        </thead>
                <?php foreach ($arrayClientes as $cliente){?>
                        <tr>
                                <td><?= $cliente['idCliente'];?></td>
                                <td><?= $cliente['nome'];?></td>
                                <td><?= $cliente['email'];?></td>
                                <td><?= $cliente['endereco'];?></td>
                                <td><?= $cliente['telefone'];?></td>
                                
                        </tr>
                <?php } ?>
                </table>
        </div>
</div>

    <!-- Fim conteúdo -->