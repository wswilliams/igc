// JavaScript Document

var segundos = 0;
var selecionado = 0;
var qtdDestaques = 0;
var tempo = 0;
var imgAtual = 0;
var imgQtd = 0;
var imgTempo = 0;

function IniciarBannerRotator(pSelecionado,pQtdDestaques,pTempo)
{
	selecionado = pSelecionado;
	qtdDestaques = pQtdDestaques;
	tempo = pTempo;
	$("div[id^=tr_destaque_]").hide();
	$("div[id=tr_destaque_"+selecionado+"]").show();
	Contador();
}

function TrocaDestaque()
{
	$("div[id=tr_destaque_"+selecionado+"]").hide();

	if(selecionado == qtdDestaques)
	{
		selecionado = 1;
	}
	else
	{
		selecionado++;
	}

	$("div[id=tr_destaque_"+selecionado+"]").fadeIn(2000);
	Contador();
}

function Contador()
{
	if(segundos == tempo)
	{
		segundos = 0;
		TrocaDestaque();
		$("div[id^=loading_]").css("background-color","#FFF");
		$("div[id^=loading_]").css("border-color","#D9D7D8");
	}
	else
	{
		segundos ++;

		if(segundos % 2 == 0)
		{
			$("div[id=loading_"+(segundos/2)+"]").css("background-color","#C80000");
			$("div[id=loading_"+(segundos/2)+"]").css("border-color","#C80000");
		}

		setTimeout("Contador()",1000);
	}
}

function IniciarImgRotator(imgSelecionada,qtdImagens,tempoTransicao)
{
	imgAtual = imgSelecionada;
	imgQtd = qtdImagens;
	imgTempo = tempoTransicao;

	setTimeout("RotacionarImagens()",imgTempo);
}

function RotacionarImagens()
{
	$("div[class=img_rotator] > img[id=img_"+imgAtual+"]").fadeOut("slow",
		function(){

		});
	imgAtual++;
	if(imgAtual > imgQtd)
	{
		imgAtual = 1;
	}

	$("div[class=img_rotator] > img[id=img_"+imgAtual+"]").fadeIn("slow",
	   function(){

		   setTimeout("RotacionarImagens()",imgTempo);

	   });

}



function Proximo()
{
	$("div[id=tr_destaque_"+selecionado+"]").hide();
	if(selecionado == qtdDestaques)
	{
		selecionado = 1;
	}
	else
	{
		selecionado++;
	}
	$("div[id=tr_destaque_"+selecionado+"]").show();
	segundos = 0;
	$("div[id^=loading_]").css("background-color","#FFF");
	$("div[id^=loading_]").css("border-color","#D9D7D8");
}

function Anterior()
{
	$("div[id=tr_destaque_"+selecionado+"]").hide();

	if(selecionado == 1)
	{
		selecionado = qtdDestaques;
	}
	else
	{
		selecionado--;
	}
	$("div[id=tr_destaque_"+selecionado+"]").show();
	segundos = 0;
	$("div[id^=loading_]").css("background-color","#FFF");
	$("div[id^=loading_]").css("border-color","#D9D7D8");
}
