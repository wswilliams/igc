<?php

function gerarRelatoriodecelulas(){
    
    if(isset($_COOKIE["nome"])){
        require_once ("mpdf.php");
        require_once ("control/controle.php");
        require_once ("modelo/objetocelula.php");
        
        $obj = 
        
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
       
       
       $retorno .= "<h2 style=\"text-align:center\">Relatorio das Celulas da IGC</h2>"; 
	      $retorno .= "<table border='1' width='1000' align='center'> 
	           <tr class='header'> 
	             <th>Celula</td> 
	             <th>Lider</td> 
	             <th>Bairro</td> 
	             <th>Rua</td> 
	             <th>Casa</td> 
	             <th>Estatus</td> 
	             <th>Membro</td> 
	           </tr>"; 
	      
	      $sql = "SELECT * FROM TAB_CLIENTE"; 
	      foreach ($this->pdo->query($sql) as $reg): 
	         $retorno .= ($color) ? "<tr>" : "<tr class=\"zebra\">"; 
	         $retorno .= "<td class='destaque'>{$reg['nome']}</td>"; 
	         $retorno .= "<td>{$reg['fone']}</td>"; 
	         $retorno .= "<td>{$reg['idade']}</td>"; 
	         $retorno .= "<td>{$reg['profissao']}</td>"; 
	         $retorno .= "<td>{$reg['email']}</td>"; 
	         $retorno .= "<td>{$reg['endereco']}</td>"; 
	         $retorno .= "<td>{$reg['cidade']}</td>"; 
	         $retorno .= "<td>{$reg['uf']}</td>"; 
	       $retorno .= "<tr>"; 
	       $color = !$color; 
	      endforeach; 
	      $retorno .= "</table>";  
              
             $pdf = new mPDF('utf-8', 'A4-L'); 
//	     $pdf->WriteHTML($this->css,1); 
	     $pdf->SetHTMLHeader($header); 
	     $pdf->SetHTMLFooter($footer); 
	     $pdf->WriteHTML($retorno); 
             $pdf->Output();
             exit;
    }else{
        
    }
}
gerarRelatoriodecelulas();
?>

