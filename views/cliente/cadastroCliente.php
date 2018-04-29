<!-- Conteudo -->

<div class="container col-md-6 col-md-offset-3 conteudo">
    <h1>Cadastrar cliente</h1>
    <div class="conteudoCad">
        <form action="?c=c&a=m" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSobrenome">Sobrenome:</label>
                    <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputRadioGenero">Gênero:</label>
                    <br>
                    <input type="radio" name="genero" value="masculino"> Masculino<br>
                    <input type="radio" name="genero" value="feminino"> Feminino<br>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group col-md-10">
                <label for="inputAddress">Endereço:</label>
                <input type="text" class="form-control" name="endereco" placeholder="Av. Rio Branco">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="example@example.com">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Senha:</label>
                <input type="password" class="form-control" name="senha" placeholder="Senha">
            </div>
            <div class="form-group col-md-5">
                <label for="inputCity">Cidade:</label>
                <input type="text" class="form-control" name="cidade" placeholder="ex: Torres">
            </div>
            <div class="form-group col-md-3">
                <label for="inputState">Estado:</label>
                <select name="estado" class="form-control">
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Brasília</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Telefone:</label>
                <input type="text" class="form-control" name="telefone" placeholder="ex: (xx) x xxxx xxxx">
            </div>
            <div class="form-group col-md-4">
                <textarea name="texto" cols="30" rows="10" placeholder="O que faz você se tornar gremista?"></textarea>
            </div>
                <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btnCad">Criar cadastro</button>
            </div>
        </form>
    </div>
</div>


<!-- Fim Conteudo -->