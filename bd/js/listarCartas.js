
jQuery(document).ready(function(){
		jQuery('#listarCastas').submit(function(){
			var dados = jQuery( this ).serialize();
                            
			jQuery.ajax({
				type: "POST",
				url: "listar_Cartas.php",
				data: dados,
				success: function( data )
				{
                                  document.getElementById("exibePesquisa").innerHTML=data;   
				}
			});
			
			return false;
		});
	});