<?php

function emitirCarta() {

    if (isset($_COOKIE["nome"])) {
        $nome = $_POST["nome"];
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetoMembro.php");
        
        $lista2 = array();
        $lista2 = $control->listadeMembrodaControle($nome);
        $chaveHoje = array_keys($lista2);
        $tamLista = sizeof($chaveHoje);
        
        if(sizeof($chaveHoje) > 0){

            $ok="<div class='panel panel-default'>
                <div class='panel-heading'>EMITIR CARTA DE SA&Iacute;DA</div>
                  <form id='gerarCartas' action = '' method = 'post' onclick ='return gerarCarta();'>
                  <table class='table'>
                    <tr>
                      <td>
                           <B>Nome do Membro</B>
                             </td>
                             <td>
                                 <B>Matricula</B>
                             </td>
                             <td>
                                 <B>Tipo</B>
                             </td>
                             <td>
                                 <B>Data</B>
                             </td>
                             <td>
                            <b>EMITIR</b>
                            </td>
                        </tr>";
                 
                        for ($index2 = 0; $index2 < $tamLista; $index2++) {
                             $indice2 = $chaveHoje[$index2];
                            
                            $ok.="<tr>
                                <td>". $lista2[$indice2]->getNome().">
                                    <input type='hidden' name= 'nome' size='50' maxlength = '90' VALUE = '".$lista2[$indice2]->getNome()."' />
                                </td>
                                <td>".$lista2[$indice2]->getMatricula().">
                                    <input type='hidden' name= 'mat' size='10' maxlength = '90' VALUE = ".$lista2[$indice2]->getMatricula()."/>
                                </td>
                                <td>
                                    <br /><select name='selec'><option value = '1'>RECOMENDA&Ccedil;&Atilde;O</option><option value = '2'>TRANSFER&Ecirc;NCIA</option>
                                    </td>
                                    <td>".date("Y-m-d").">
                                        <input type='hidden' name= 'dat' size='20' maxlength = '10' VALUE = ".date("Y-m-d")."/>
                                    </td>
                                    <td>
                                        <input type='image' src='ICON/icon-47587_150.png' width='40' height='30' border='0' title = 'CARTA'>
                                        </td>
                             </tr>";
                            }
                            $ok.="</table>
                            </form></div>";
                         }
                         else{
                             $ok="<div class='alert alert-danger' role='alert'>
                                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                                <span class='sr-only'>Error:</span>
                                 Nao ha carta
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

emitirCarta();
?>