
function cadastrar_Escola(){
    
		jQuery('#cadastrar_escola_form').submit(function(){
			var dados = jQuery( this ).serialize();
			jQuery.ajax({
				type: "POST",
				url: "cadastrarEscola.php",
				data: dados,
				success: function( data )
				{
                                  document.getElementById("exiberesposta").innerHTML=data;   
				}
			});
			
			return false;
//                        
		});
	};
