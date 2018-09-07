<?php include('header-admin.html') ?>

    <div class="container">
        <h3>Adicionar Livros ao Banco</h3>
        <form action="config/adiciona.php" method="post">

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
                        <input type="date" class="form-control" name="datalivro" id="datalivro">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Preço:</label><br>
                        <input type="number" class="form-control" name="preco" id="preco"> 
                    </div>
                    <div class="col">
                        <label>Gênero:</label></br>
                        <select class="form-control">
                            <option>Administração</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
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