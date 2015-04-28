/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function(){
		jQuery('#cadastrar-membro').submit(function(){
			var dados = jQuery( this ).serialize();
                        
			jQuery.ajax({
				type: "POST",
				url: "update_membro.php",
				data: dados,
				success: function( data )
				{
                                     document.getElementById("exiberesposta").innerHTML=data;
                                  
				}
			});
			
			return false;
		});
	});


