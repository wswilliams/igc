<?php

function aniversariantes() {
$ok="0";

if (isset($_COOKIE["nome"])&& isset($_POST["mes"])) {
        
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetoMembro.php");
        $mes = $_POST["mes"];
        $lista1 = array();
        $lista1 = $control->listaTodosAniversariantesdoMesControle($mes);
        $chaveHoje = array_keys($lista1);
        
        if(sizeof($chaveHoje) > 0){
        $ok = "<div class='panel panel-default'>
                <div class='panel-heading'>Aniversariantes do M&ecirc;s Escolhido</div>
                  <form action = 'consultabanco.php' method = 'post' >
                  <table class='table'>
                    <tr>
                      <td>
                         Nome</td><td>Data de Nascimento</td><td>Enviar Mensagem</td></tr>";
         
        for ($index2 = 0; $index2 < sizeof($chaveHoje); $index2++) {
            $indice2 = $chaveHoje[$index2];

            $ok .="<tr>
                        <td>
                           " . $lista1[$indice2]->getNome() .
                    "<input type='hidden' name='nome' value=" . $lista1[$indice2]->getMatricula() . ">
                        </td>
                        <td>
                           " . $lista1[$indice2]->getData().">
                        </td>
                        <td>
                            <input type='image' src='ICON/b_view.png' width='20' height='20' border='0' title = 'CONSULTAR'>
                        </td>
                      </tr>";
        }
       $ok .= "</table>
                 </form>
                 </div>";
        
        }else{
            $ok="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Nao ha aniversariante hoje
              </div>";
        }
        
    } else {
        $ok="<div class='alert alert-danger' role='alert'>
        <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
        <span class='sr-only'>Error:</span>
         Usuario nao esta logado
      </div>";
    }
    echo $ok;
}

aniversariantes();
?>
