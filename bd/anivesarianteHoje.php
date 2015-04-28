<?php

function aniversariantes() {
$ok="0";
        /*sera executado quando a consulta for para listar os aniversariantes de hoje */
    if (isset($_COOKIE["nome"])) {
        
        require_once ("control/controle.php");
        $control = controle::getInstance();
        require_once ("modelo/objetoMembro.php");
         $lista2 = array();
        $lista2 = $control->listaTodosAniversariantesdeHojeControle();
        $chaveHoje = array_keys($lista2);
        
        if(sizeof($chaveHoje) > 0){
            $ok = "<div class='panel panel-default'>
                <div class='panel-heading'>Aniversariantes de Hoje</div>
                  <form action = 'consultabanco.php' method = 'post' >
                  <table class='table'>
                    <tr>
                      <td>
                          Nome</td><td>Enviar Mensagem</td></tr>";
         
        for ($index2 = 0; $index2 < sizeof($chaveHoje); $index2++) {
            $indice2 = $chaveHoje[$index2];

            $ok .="<tr>
                        <td>
                           " . $lista2[$indice2]->getNome() .
                    "<input type='hidden' name='nome' value=" . $lista2[$indice2]->getMatricula() . ">
                        </td>
                        <td>
                            <input type='image' src='ICON/b_view.png' width='20' height='20' border='0' title = 'CONSULTAR'>
                        </td>
                      </tr>";
        }
       $ok .= "</table>
                 </form></div>";
        
        }else{
            $ok="<div class='alert alert-danger' role='alert'>
                <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                <span class='sr-only'>Error:</span>
                 Nao ha aniversariante hoje
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

aniversariantes();
?>