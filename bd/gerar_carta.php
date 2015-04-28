
<?php
function gerarCarta(){
    
     if (isset($_COOKIE["nome"])) {

	$nome = $_POST["nome"]; // recebe a variavel
	$matricula = $_POST["mat"]; // recebe a variavel
	$tip = $_POST["selec"]; // recebe a variavel
	$data_atual = date($_POST["dat"]);
        
        require_once ("control/controle.php");
        
        $obj = controle::getInstance();
        
        $ok = $obj->cadadastrarCartaControle($matricula,$tip,$data_atual);
        
        if($ok == 0){
            $ok="<div class='alert alert-success' role='alert'>
                   Parabens, Carta emitida com sucesso
                      <form id='gerarCartas' action = 'imprimirCarta.php' method = 'post' target='_blanck'>
                         <input type='hidden' name= 'nome' size='10' maxlength = '90' VALUE = '".$nome."'/>
                         <input type='hidden' name= 'selec' size='10' maxlength = '90' VALUE = ".$tip."/>
                         <input type='hidden' name= 'dat' size='10' maxlength = '90' VALUE = ".$data_atual."/>
                         <input type='image' src='ICON/impressao.png' width='40' height='30' border='0' title = 'EXIBE CARTA' />
                       </form>
                   </div>";
            
        }else  if($ok == 1){
            
             $ok="<div class='alert alert-danger' role='alert'>
             <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
             <span class='sr-only'>Error:</span>
             Já existe uma carta espedita para esse Membro
             </div>";
            }
         else{
             $ok="<div class='alert alert-danger' role='alert'>
             <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
             <span class='sr-only'>Error:</span>
             Nao foi possivel emitir carta
             </div>";
         }
        
   }else{
         header("Location: Index.php?");
   }
echo $ok;
}
gerarCarta();
?>
