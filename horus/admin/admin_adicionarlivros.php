<?php include('header-admin.html') ?>

   
    <div class="container">
        <h3>Adicionar Livros ao Banco</h3>
        <form action="../config/addLivro.php" method="post" enctype="multipart/form-data">

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
                           <option selected disabled>Selecione o Gênero</option>
                            <option value="admin">Administração</option>
                            <option value="autoajuda">Auto Ajuda</option>
                            <option value='ciencias'>Ciencias Exatas</option>
                            <option value="drama">Drama</option>
                            <option value="esoterismo">Esoterismo</option>
                            <option value="filosofia">Filosofia</option>
                            <option value=" literaturabrasileira">Literatura Brasileira</option>
                            <option value="literturaestrangeira">Literatura Estrangeira</option>
                            <option value="romance">Romance</option>
                            <option value="saude">Saude</option>
                            <option value='outros'>Outros</option>
                            <option value="Psicologia">Psicologia</option>
                            <option value="religiao">Religião</option>
                        </select>
                    </div>
                </div>
                <div class="col">Adicionar Capa:
                  <input type="file" name="imagem" class="form-control" />
                </div>
                <div class="col">
                    Descrição:<br>
                    <textarea class="form-control" name="descricao" id="descricao"></textarea>
                </div>

                <div id="cadastrar">
                <input type="submit" class="btn btn-warning" value="Cadastrar" id="btncadastrar" >
                </div>
            </div>
        </form>
        
        <script>
            $('#btncadastrar').on( "click", function() {
            alert('Livro Adicionado');
});
                
        </script>
        
    </div>

     </div>


<?php include('footer-admin.html')?>


