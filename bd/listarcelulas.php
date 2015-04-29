<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function  listarCelula(){
$ok="";
if(isset($_COOKIE["nome"])){
     
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetocelula.php");
        
        $lista2 = array();
        $lista2 = $control->listaTodasCelulasControle();
        $chavelista = array_keys($lista2);
        $tamLista= sizeof($chavelista);
        
        $ok.="<div class='panel panel-default'>
                <div class='panel-heading'>Ha ".$tamLista." Celulas Cadastrada no Sistema</div>
                  <table class='table'>
                    <tr>
                      <td>
                         Nome</td><td>Add</td></tr>";
         
        for ($index2 = 0; $index2 < $tamLista; $index2++) {
            $indice2 = $chavelista[$index2];

            $ok .="<tr>
                        <td>
                           " . $lista2[$indice2]->getNome()."
                        </td>
                        <td><form action = 'addMembronaCelula.php' method = 'post' >
                            <input type='hidden' name='id' value=" . $lista2[$indice2]->getId(). ">
                            <input type='hidden' name='lider' value=" . $lista2[$indice2]->getLider(). ">
                            <input type='hidden' name='nome' value='" . $lista2[$indice2]->getNome()."'>
                            <input type='hidden' name='estilo' value=" . $lista2[$indice2]->getEstilo().">
                            <input type='image' src='ICON/b_view.png' width='20' height='20' border='0' title = 'Adicionar Membros a Celula'>
                        </form></td>
                      </tr>";
        }
       $ok .= "</table>
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
listarCelula();
 ?>