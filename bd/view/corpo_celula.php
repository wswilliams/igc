<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function  corpo_Celula(){
$ok="";
if(isset($_COOKIE["nome"])){
     
        require_once ("../control/controle.php");
        $control = controle::getInstance();
        require_once ("../modelo/objetoMembro.php");
        
        $lista2 = array();
        $lista2 = $control->listadeTodosLiderControle();
        $chavelista = array_keys($lista2);
        $tamLista= sizeof($chavelista);
        
$ok.="<div class='row'>
        <div class='col-md-12'>
                <div class='form-group form-group-sm'>

                   <form id='cadastrar_celula' class='form-horizontal' action='' method='POST' onclick ='return cadastrarCelulas();'> 
                        <label class='col-sm-2 control-label' for='formGroupInputSmall' id='lbel'>Nome</label>
                        <div class='col-sm-10'>
                          <input class='form-control' type='text' name='nome' id='formGroupInputSmall' placeholder='xxxxxxxxxxxx' required='required'>
                          <br>
                        </div>
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Bairro</label>
                        <div class='col-sm-10'>
                          <input class='form-control' name='bairro' type='text' id='formGroupInputSmall' placeholder='xxxxxxxxxxxx' required='required'>
                          <br>
                        </div>
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Rua</label>
                        <div class='col-sm-10'>
                          <input class='form-control' type='text' placeholder='xxxxxxxxxxxx' id='formGroupInputSmall' required='required' name='rua' />
                          <br>
                        </div>
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Casa</label>
                        <div class='col-sm-10'>
                          <input class='form-control' type='text' placeholder='xxxxxxxxxxxx' id='formGroupInputSmall' required='required' name='casa' />
                          <br>
                        </div>
                        
                        <label class='col-sm-2 control-label' for='formGroupInputSmall'>Dia</label>
                       <div class='col-xs-2'>
                            <select class='form-control ' id='formGroupInputSmall' name='dia' >
                                <option value='SEGUNDA'>SEGUNDA</option>
                                <option value='TERCA'>TERCA</option>
                                <option value='QUARTA'>QUARTA</option>
                                <option value='QUINTA'>QUINTA</option>
                                <option value='SEXTA'>SEXTA</option>
                                <option value='SABADO'>SABADO</option>
                                <option value='DOMINGO'>DOMINGO</option>
                            </select>
                           <br>
                       </div>
                       <label class='col-sm-2 control-label' for='formGroupInputSmall'>Lider</label>
                        <div class='col-xs-2'>
                            <select class='form-control' id='formGroupInputSmall' name='lider'>";

                        for ($index2 = 0; $index2 < $tamLista; $index2++) {
                             $indice2 = $chavelista[$index2];    
                             
                              $ok.="<option value = ".$lista2[$index2]->getMatricula().">>".$lista2[$index2]->getNome()."</option>"; 
                        }
                        
                      $ok.="</select></div>
                       <p align = right>
                           <button class='btn btn-small' type='submit'>Enviar</button>
                      </p>
                      
                    </form>
                 </div>
            </div>
         </div>";
        
   }else {
     $ok="<div class='alert alert-danger' role='alert'>
                                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                                <span class='sr-only'>Error:</span>
                                 Nao ha Celulas Cadastrada no Sistema
                              </div>";
}
  
         echo $ok;
}
corpo_Celula();
 ?>