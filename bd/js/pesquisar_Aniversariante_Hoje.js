/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function(){
		jQuery('#pesquisarHoje').submit(function(){
			var dados = jQuery( this ).serialize();
                            
			jQuery.ajax({
				type: "POST",
				url: "anivesarianteHoje.php",
				data: dados,
				success: function( data )
				{
                                  document.getElementById("exibePesquisa").innerHTML=data;   
				}
			});
			
			return false;
		});
	});
