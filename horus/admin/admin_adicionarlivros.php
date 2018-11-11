<?php include('header-admin.html') ?>

    <div class="container">
        <h3>Adicionar Livros ao Banco</h3>
        <form action="../config/adiciona.php" method="post">

            <div class="form-group">

                <div class="row">
                    <div class="col">
                        Nome do Livro:<br>
                        <input type="text" class="form-control" name="nomedolivro" id="nomelivro">
                    </div>

                    <div class="col">
                        Autor:<br>
                        <input type="text" class="form-control" name="autor" id="autor">
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        Editora:<br>
                        <input type="text" class="form-control" name="editora" id="editora">
                    </div>

                    <div class="col">
                        Ano do Livro:</br>
                        <input type="text" class="form-control" name="anolivro" id="datalivro">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Preço:</label><br>
                        <input type="number" class="form-control" name="preco" id="preco">
                    </div>
                    <div class="col">
                        <label>Gênero:</label></br>
                        <select class="form-control" name='genero'>
                            <option value="admin">Administração</option>
                            <option value="esoterismo">Esoterismo</option>
                            <option value="romance">Romance</option>
                            <option value="saude">Saude</option>
                            <option value='ciencias'>Ciencias Exatas</option>
                            <option value="religiao">Religião</option>
                            <option value='outros'>Outros</option>
                            <option value="Psicologia">Psicologia</option>
                            <option value="historia do brasil">Historia do Brasil</option>
                            <option value="historia geral">Historia Geral</option>
                            <option value=" literatura brasileira">Literatura Brasileira</option>
                            <option value="litertura estrangeira">Literatura Estrangeira</option>
                            <option value="auto ajuda">Auto Ajuda</option>
                            <option value="drama">Drama</option>
                        </select>
                    </div>
                </div>
                <div class="col">Adicionar Capa:
                  <input type="file" name="imagem" class="form-control" />
                </div>
                <div class="col">
                    Descrição:<br>
                    <textarea class="form-control" name="descricao" id="descricao">

                    </textarea>
                </div>

                <div id="cadastrar">
                <input type="submit" class="btn btn-warning" value="Cadastrar" id="btncadastrar" >
                </div>
            </div>
        </form>

    </div>

     </div>


<?php include('footer-admin.html')?>
