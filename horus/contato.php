<?php include('header.html') ?>
    
   <!-- inicio condigo contato by: Pedrin -->

    <div id="contat" class="container">
        
          <div class="form-group" id="contatenos">
          
          <h3>Entre contato com a gente!!!</h3>
             Rua Senador Dantas 75 sala 303
             Centro 20031-914 
             (21) 2533-3638<br>
            <b>livhorus@gmail.com</b> <br>
           Nome: <input type="text" name="nome" class="form-control"> <br>
        
            Email: <input type="email" name="email" class="form-control"><br>
        
            Descrição: <textarea class="form-control"></textarea><br>
        
               <input type="submit" class="btn btn-primary" value="Enviar"><br><br>
               
               <h6> <a href="" data-toggle="modal" data-target="#exampleModalCenter">Elogios/Reclamações</a> </h6>
               
                    
 </div>
               
       

            
            
            <div id="maps"><p>Encontre-nos pelo mapa do Google!</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d649.6690700266387!2d-43.178069410129666!3d-22.910300416957494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f617253589d%3A0x5f6866346e1dde3!2sLivraria+Horus!5e0!3m2!1spt-BR!2sbr!4v1535154970119" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>
        

    </div>
    
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
            
                Nível de satisfarção:<input type="range" name="urg" minlength="0" maxlength="10" step="1" class="form-control"><br>
            Mensagem<input type="text" name="msg"  class="form-control" row="10">

            
             
              
              
              
              
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
      
      </div>
   
<!-- FIM CÓDIGO CONTATO PEDRIN -->
   
<!--Código do Rodapé -->

</div>

<?php include('footer.html') ?>


