<?php include('header.php') ?>


<!--aqui começa novo form sugestoes-->

       
           <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Fale Conosco
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Sugestões</h5><br><br>
              

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
              <div class="form-group">
                  <form action="recebform.php" method="POST">
                 Nome:<input type="text" name="nome" class="form-control"><br>
                 Email:<input type="email" name="email" class="form-control"><br>
                 Estado civíl:<select name="estcivil" class="form-control">
                   <option value="solteiro (a)">solteiro (a)</option>
                   <option value="casado (a)">casado (a)</option>
                   <option value="divorciado (a)">divorciado (a)</option>
                   <option value="viuvo (a)">viúvo (a)</option>
                 </select><br>

            Sexo:<br><input type="radio" name="sexo" value="Masc.">Masculino
                <input type="radio" name="sexo" value="Fem.">Masculino<br>
            
                Grau de satisfarção:<input type="range" name="urg" minlength="0" maxlength="10" step="1"><br>
            Mensagem<input type="text" name="msg" class="form-textarea">

            
             
              
              
              
              
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
        
                  
                  
        
 </div>
    </div>
