<?php

function listarCarta() {

    if (isset($_COOKIE["nome"])) {
        
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetoMembro.php");
        
        $lista2 = array();
        $lista2 = $control->listadeTodasCartaControle();
        $chaveHoje = array_keys($lista2);
        $ok="";
        $tamanhoLista=sizeof($chaveHoje);
        if($tamanhoLista > 0){
            
                 $ok.="<div class='row'>
                     <div class='col-md-12'>
                     <div class='panel panel-default'>
                     <div class='panel-heading'>QUANTIDADE DE CARTAS EMITIDA NO SISTEMA: ".$tamanhoLista."<br></div>
                     <div class='form-group form-group-sm'>";
                     
                        for ($index2 = 0; $index2 < sizeof($chaveHoje); $index2++) {
                             $indice2 = $chaveHoje[$index2];
                            
                            $ok.="<form class='form-horizontal' action='imprimirCarta.php' method='POST' target='_blanck'>
                                <label class='col-sm-4 control-label' for='formGroupInputSmall' id='lbel'>". $lista2[$indice2]->getNome()."</label>
                                <input type='hidden' name= 'nome' size='50' maxlength = '90' VALUE = '".$lista2[$indice2]->getNome()."'/>
                                    
                                <label class='col-sm-2 control-label' for='formGroupInputSmall' id='lbel'>Matricula: ".$lista2[$indice2]->getMatricula()."</label>
                                <input type='hidden' name= 'mat' size='10' maxlength = '90' VALUE = ".$lista2[$indice2]->getMatricula()."/>
                                    
                                <label class='col-sm-2 control-label' for='formGroupInputSmall' id='lbel'>TRANSFER&Ecirc;NCIA</label>
                                <input type='hidden' name= 'select' size='10' maxlength = '90' VALUE = '1'/>
                                
                                <label class='col-sm-2 control-label' for='formGroupInputSmall' id='lbel'>Data: ".date("Y-m-d")."</label>
                                <input type='hidden' name= 'dat' size='20' maxlength = '10' VALUE = ".date("Y-m-d")."/>
                                    
                                <label class='col-sm-2 control-label' for='formGroupInputSmall' id='lbel'>
                                <input type='image' src='ICON/impressao.png' width='40' height='30' border='0' title = 'EXPORTA PARA PDF'></label>
                                
                               </form><br>";
                            }
                            
                            $ok.="</div></div></div>";
                         
                         }
                         else{
                             $ok="<div class='alert alert-danger' role='alert'>
                                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                                <span class='sr-only'>Error:</span>
                                 Nao ha carta emitida no sistema
                              </div>";
                         }
			  
        
        /*sera executado quando a consulta for para listar os aniversariantes do mes escolhido */
        
    } else {
        $ok="<div class='alert alert-danger' role='alert'>
        <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
        <span class='sr-only'>Error:</span>
         Usuario nao esta logado
      </div>";
    }
    
    echo $ok;
}

listarCarta();
?>