/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
//function lisparCamposCelula(){
		jQuery('#excluir').submit(function(){
			var dados = jQuery( this ).serialize();
                        var x = document.getElementById("listEx");
                        x.remove(x.selectedIndex);
                        
//                        document.createElement("option");
                        
//			jQuery.ajax({
//				type: "POST",
//				url: "exclui_membro_celula.php",
//				data: dados,
//				success: function(data)
//				{
//                                        var valores= data.split(";");
//                                        var indice = document.getElementById("listAdd").length;
//                                        document.getElementById("listAdd").options[indice] = new Option(valores[0],valores[1]);
//                                    
//				}
//			});
//			
//			return false;
		});
	});



