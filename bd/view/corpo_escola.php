<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function  corpo_Escola(){
$ok="";
if(isset($_COOKIE["nome"])){
     
$ok.="<div class='row'>
        <div class='col-md-12'>
                <div class='form-group form-group-sm'>
                   <form id='cadastrar_celula' class='form-horizontal' action='' method='POST' onclick ='return cadastrarEscola();'> 
                        <label class='col-sm-2 control-label' for='formGroupInputSmall' id='lbel'>Nome</label>
                        <div class='col-sm-10'>
                          <input class='form-control' type='text' name='nome' id='formGroupInputSmall' placeholder='xxxxxxxxxxxx' required='required'>
                          <br>
                        </div>
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Data Inicio</label>
                        <div class='col-sm-10'>
                          <input id='dtinicio' class='form-control' type='text' placeholder='99/99/9999' id='formGroupInputSmall' required='required' name='dtinicio'/>
                          <br>
                        </div>
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Data Final</label>
                        <div class='col-sm-10'>
                          <input id='dtfinal' class='form-control' type='text' placeholder='99/99/9999' id='formGroupInputSmall' required='required' name='dtfinal' />
                          <br>
                        </div>
                        
                           <br>
                       </div>
                       <p align = right>
                           <button class='btn btn-small' type='submit'>Enviar</button>
                      </p>
                      
                    </form>
                 </div>
            </div>
         </div>";
        
   }else {
      header("Location: ../index.php");
}
  
         echo $ok;
}
corpo_Escola();
 ?>
