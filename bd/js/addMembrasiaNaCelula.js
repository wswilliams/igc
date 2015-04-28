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
		jQuery('#addMembro').submit(function(){
			var dados = jQuery( this ).serialize();
                        var erro="Erro, não foi possivel add o membro";
//                        alert(dados);
			jQuery.ajax({
				type: "POST",
				url: "addmembroCelula.php",
				data: dados,
				success: function( data )
				{
                                        document.getElementById("exibePesquisa").innerHTML=data; 
                                        document.getElementById("listRecept").innerHTML=data; 
                                    
				}
			});
			
			return false;
		});
	});


