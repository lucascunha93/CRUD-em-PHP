
<div class="container conteudo table-responsive">
        <div class="container">
                <h1>Dados a serem enviados ao BD:</h1>
                <table class="table table-hover table-striped ">
                        <thead>
                                <tr>
                                        <td>Nome:</td>
                                        <td>Sobrenome:</td>
                                        <td>Gênero:</td>
                                        <td>Endereço:</td>
                                        <td>Email:</td>
                                        <td>Senha:</td>
                                        <td>Cidade:</td>
                                        <td>Estado:</td>
                                        <td>Telefone:</td>
                                        <td>Texto:</td>
                                        
                                </tr>
                        </thead>
                        <tr>
                                <td><?= $cliente['nome'];?></td>
                                <td><?= $cliente['sobrenome'];?></td>
                                <td><?= $cliente['genero'];?></td>
                                <td><?= $cliente['endereco'];?></td>
                                <td><?= $cliente['email'];?></td>
                                <td><?= $cliente['senha'];?></td>
                                <td><?= $cliente['cidade'];?></td>
                                <td><?= $cliente['estado'];?></td>
                                <td><?= $cliente['telefone'];?></td>
                                <td><?= $cliente['texto'];?></td>
                        </tr>
                </table>
        </div>
</div>
