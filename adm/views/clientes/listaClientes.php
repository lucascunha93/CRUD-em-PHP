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
                                        <th class="text-center col-md-2">Acão</th>
                                </tr>
                        </thead>
                <?php foreach ($arrayClientes as $cliente){?>
                        <tr>
                                <td><?= $cliente['idCliente'];?></td>
                                <td><?= $cliente['nome'];?></td>
                                <td><?= $cliente['email'];?></td>
                                <td><?= $cliente['endereco'];?></td>
                                <td><?= $cliente['telefone'];?></td>
                                <td >
                                        <a class="btn btn-danger edit" href="?c=c&a=dc&id=<?=$cliente["idCliente"]?>" aria-label="Settings">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        &nbsp 
                                        <a class="btn btn-info edit" href="?c=c&a=ac&id=<?=$cliente["idCliente"]?>" aria-label="Settings">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a> 
                                </td>
                        </tr>
                <?php } ?>
                </table>
        </div>
</div>

    <!-- Fim conteúdo -->