$(function(){   
			var navH = $('#menu-ok');   
                        var nav1H = $('#menu-completo');
                        
                        var nav = $('#menu-ok');   
                        var nav1 = $('#menu-completo');
			$(window).scroll(function () { 
				if ($(this).scrollTop() > 0) { 
					nav.addClass("menu-fixo"); 
//                                        nav1.addClass("menu-completo-fixo"); 
				} else { 
					nav.removeClass("menu-fixo"); 
                                        nav1.removeClass("menu-completo-fixo");
                                        navH.addClass("#menu-ok"); 
                                        nav1H.addClass("#menu-completo"); 
				} 
			});  

		});
