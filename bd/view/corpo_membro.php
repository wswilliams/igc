<?php
function form_Pesquisar()
{
    
        $ok="<div class='panel panel-default'>
                <div class='panel-heading'>Pesquisar Membrasia</div>
                <form id='buscar' action='pesquisar.php' method='post'>
                  <table class='table'>
                    <tr>
                      <td>
                      Nome <input type='text' name='nome' maxlength='50' placeholder='Informe o nome do membro ...' required='required'></td>
                      <td><input type='image' src='ICON/icon-29398_150.png' width='30' height='20' border='0' title = 'Consultar'></td>
                      <td><input type='reset' name='limpar' value='Limpar'></td>
                    </tr>
                  </table>
                </form>
              </div>";
      
    echo $ok;
}
form_Pesquisar();
?>