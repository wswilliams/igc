<?php

function gerarRelatoriodecelulas(){
    
    if(isset($_COOKIE["nome"])){
        
        require_once ("control/controle.php");
        require_once ("modelo/objetocelula.php");
        
        
        $obj = controle::getInstance();
        $lista = array();
        $celula =new objetocelula();
        $lista = $obj->relatorioDeCelulaControle();
        $chave = array_keys($lista);
        
       $data = date('j/m/Y'); 
       $header = "<table class=\"tbl_header\" width=\"1000\"> 
	               <tr> 
	                 <td align=\"left\">Biblioteca mPDF</td> 
	                 <td align=\"right\">Gerado em: $data</td> 
	               </tr> 
	             </table>";
       
       $footer = "<table class=\"tbl_footer\" width=\"1000\"> 
	               <tr> 
	                 <td align=\"left\"><a href=''>devwilliam.blogspot.com</a></td> 
	                 <td align=\"right\">Página: {PAGENO}</td> 
	               </tr> 
	             </table>";  
       $tamanhoLista = sizeof($chave);
       $retorno="";
       if($tamanhoLista > 0){

       $retorno .= "<h2 style=\"text-align:center\">Relatorio das Celulas da IGC</h2>"; 
	      $retorno .= "<table border='1' width='1000' align='center'> 
	           <tr class='header'> 
	             <th>Celula</td> 
                     <th>Rua</td> 
                     <th>Casa</td> 
	             <th>Bairro</td> 
                     <th>Dia</td>
                     <th>Estatus</td>
                     <th>Membro</td> 
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
                    $retorno .= "<tr><td colspan='7'>".$lista[$indice]->__toString()."</td></tr>";
           
//                  $color = !$color; 
//                echo $lista[$indice]->getNome();
               }
               $retorno .= "</table>";  
               
           }else{
               $retorno .= "Consulta vazia";  
           }   
             //==============================================================
            //==============================================================
            //==============================================================
             require_once ("mpdf.php");

            $mpdf=new mPDF('c'); 

            $mpdf->WriteHTML($retorno);

            $mpdf->Output();
            exit;
             
             
             
             
//             $html = '
//<style>
//table { border-collapse: collapse; margin-top: 0; text-align: center; }
//td { padding: 0.5em; }
//h1 { margin-bottom: 0; }z
//</style>
//
//<table>
//<tr><td><input type="image" src="ICON/LOGO CARTA.jpg" width="100%" height="70%" border="0"><br><br><br><br><br><br><br><br></td></tr>
//<tr><td align = "center" style="font-size: 14pt">CARTA DE RECOMENDAÇÃO<br><br><br><br><br><br><br></td></tr>
//<tr><td align = "justify" style="font-size: 14pt">
//A Igreja Evangélica Pentecostal Gerações Para Cristo <b>RECOMENDA</b> por meio desta que o amado e querido irmão em Cristo
//Jesus<b> '.$nome.' e família</b>, encontram-se em comunhão com está Igreja do Senhor Jesus Cristo, podendo assim
//ser recebido como convém aos santos.<br><br><br><br><br><br><br><br><br><br><br><br><br><br></td></tr>
//<tr><td><input type="image" src="ICON/ASSINATURA.png" width="100%" height="5%" border="0"></td></tr><tr>
//</table>
//
//';


    }else{
        
    }
}
gerarRelatoriodecelulas();
?>

