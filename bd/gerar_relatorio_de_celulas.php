<?php

function gerarRelatoriodecelulas(){
    
    if(isset($_COOKIE["nome"])){
        
        require_once ("control/controle.php");
        require_once ("modelo/objetocelula.php");
        
        $obj = controle::getInstance();
        $lista = array();
        $listaMembros = array();
        $celula =new objetocelula();
        
        $lista = $obj->relatorioDeCelulaPart1Controle();
        $chave = array_keys($lista);
        
        
       $data = date('j/m/Y'); 
       $header = "<table class=\"tbl_header\" width=\"1000\"> 
	               <tr> 
	                 <td align=\"left\">Igreja Gera&ccedil;&otilde;es para Cristo</td> 
	                 <td align=\"right\">Gerado em: $data</td> 
	               </tr> 
	             </table>";
       
       $footer = "<table class=\"tbl_footer\" width=\"1000\"> 
	               <tr> 
	                 <td align=\"left\"><a href=''>http://www/geracoesparacristo.com</a></td> 
	                 <td align=\"right\">Página: {PAGENO}</td> 
	               </tr> 
	             </table>";  
       $tamanhoLista = sizeof($chave);
       $retorno=$header;
                           
       if($tamanhoLista > 0){

       $retorno .= "<h2 style=\"text-align:center\">Relat&oacute;rio das Celulas da IGC</h2>"; 
       $retorno .= "<table border='1' width='1000' align='center'> 
	           <tr class='header'> 
	             <th>Celula</td> 
                     <th>Rua</td> 
                     <th>Casa</td> 
	             <th>Bairro</td> 
                     <th>Dia</td>
                     <th>Estatus</td>
                     <th>L&iacute;der</td> 
	           </tr>"; 
	     
               for ($index = 0; $index < $tamanhoLista; $index++) {
                     $indice = $chave[$index];
//                    $retorno .= ($color) ? "<tr>" : "<tr class=\"zebra\">"; 
                    $retorno .= "<tr><td class='destaque'>".$lista[$indice]->getNome()."</td>"; 
                    $retorno .= "<td>".$lista[$indice]->getRua()."</td>"; 
                    $retorno .= "<td>".$lista[$indice]->getCasa()."</td>"; 
                    $retorno .= "<td>".$lista[$indice]->getBairro()."</td>"; 
                    $retorno .= "<td>".$lista[$indice]->getDia()."</td>"; 
                    $retorno .= "<td>".$lista[$indice]->getStatus()."</td>"; 
                    $retorno .= "<td>".$lista[$indice]->getNomeMembro()."</td>"; 
                    $retorno .= "<tr>"; 
                   }
                   
                   $listaMembros = $obj->relatorioDeCelulaPart2Controle();
                   $chaveIntena = array_keys($listaMembros);
                   $tamanhoListaInterna = sizeof($chaveIntena);
                   $retorno .= "<tr><td colspan='7' align='center'><b>LISTA DE INTEGRANTES POR CELULA</b></td></tr>";
                    if($tamanhoListaInterna > 0){
                        
                        for ($i = 0; $i < $tamanhoListaInterna; $i++) {
                             $indice = $chaveIntena[$i];
                             $retorno .= "<tr><td colspan='3'><b>".$listaMembros[$i]->getNome()."</b></td>";
                             $retorno .= "<td colspan='4'>".$listaMembros[$i]->getNomeMembro()."</td></tr>";
                    }
                    
//                  $color = !$color; 
//                echo $lista[$indice]->getNome();
               }
               $retorno .= "</table>";  
               
           }else{
               $retorno .= "Consulta vazia";  
           }
           $retorno .=$footer;
             //==============================================================
            //==============================================================
            //==============================================================
             require_once ("mpdf.php");

            $mpdf=new mPDF('c'); 

            $mpdf->WriteHTML($retorno);

            $mpdf->Output();
            exit;
             

    }else{
        
    }
}
gerarRelatoriodecelulas();
?>

