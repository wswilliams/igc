
jQuery(document).ready(function(){
		jQuery('#pesquisarMembros').submit(function(){
			var dados = jQuery( this ).serialize();
                            
			jQuery.ajax({
				type: "POST",
				url: "view/corpo_membro.php",
				data: dados,
				success: function( data )
				{
//                                   alert(data);
                                  document.getElementById("exibePesquisa").innerHTML=data;   
				}
			});
			
			return false;
//                        
		});
	});