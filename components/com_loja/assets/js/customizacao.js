
$('#inputdroparea').droparea();
    /*$(function() {
        //$( "#tabs" ).tabs();
    });*/

$('#tabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});

$(document).ready(function(){
	$('#quadropai1').hide();
	$('#quadropai2').hide();
});


var flag = [false,false,false];
var idTamanho = '';
var valorTotal;

function onmouseoverQuad(e) {
	var quadro = e.getAttribute("data-numerodoquadro");
	
	if(flag[quadro] && $('#idTamanhoQuadro'+quadro).val() == '') {
		var idtam = e.getAttribute("data-idtamanho");
		$('#idTamanhoQuadro'+quadro).val(idtam);
		atualizaNumeroPessoas(idtam,e);
	}if(!flag[quadro] && $('#idTamanhoQuadro'+quadro).val() != '') {
		$('#idTamanhoQuadro'+quadro).val('');
		//Caso o usuario desmarcar o tamanho do quadro ele limpa o numero de pessoas e 
		//subtrai o preço
		//Seta o preço no input do tipo hidden
		$('#idNumeroPessoas'+quadro).attr("data-preco",0);
		//Atualiza o preço total
		atualizaPreco();
		
		limpaNumeroPessoas(e);
	}
	limpaOutrosElementos(e);
}
function limpaOutrosElementos(e) {
	var quadro = e.getAttribute("data-numerodoquadro");
	if(!flag[quadro]) {
		e.style.backgroundColor = 'gray';
		var divTexto = e.getAttribute("data-texto");
		var elemento = document.getElementById(divTexto);
		elemento.innerHTML = e.getAttribute("data-tamanho");
		$("."+e.getAttribute("data-classe")).map(function () {
			if(this.id != e.id) {
				document.getElementById(this.id).style.backgroundColor = 'white';
			}
			if(this.getAttribute("data-texto") != divTexto) {
				document.getElementById(this.getAttribute("data-texto")).innerHTML = "";
			}
		})
		
	}
	
}
function limpaTextoMouseOut(e) {
	if(!flag) {
		var divTexto = e.getAttribute("data-texto");
		document.getElementById(divTexto).innerHTML = "";
		document.getElementById(e.id).style.backgroundColor = 'white';
		
	}
}

function atualizaNumeroPessoas(idTamanho,e) {
	var quadro = e.getAttribute("data-numerodoquadro");
	
	$("#quadropai"+quadro+" .num_pessoas-wrap #quadro"+quadro+" li").map(function () {					
		if(this.className == 'tamanho'+idTamanho) {
			$(this).css('display', 'inline');
		}
	});
	$("#quadropai"+quadro+" .num_pessoas-wrap #quadro"+quadro+" .numPessoas-demo").css('display','none');
	
}

flagNumPessoas = false;
numPessoasId = '';
function onOverNumPessoas(e) {
	var quadro = e.getAttribute("data-numerodoquadro");
	
	$("#quadropai"+quadro+" .num_pessoas-wrap #quadro"+quadro+" li").map(function () {
					
		if(parseInt(this.getAttribute("data-id")) <= parseInt(e.getAttribute("data-id"))) {
			document.getElementById(this.id).style.background = 'url("../components/com_popstilcustomizacao/assets/img/icon-pessoas.png") 0px 0px no-repeat';
		}else{
			document.getElementById(this.id).style.background = 'url("../components/com_popstilcustomizacao/assets/img/icon-pessoas.png") -16px 0px no-repeat;';
		}
	})
}
function onOutNumPessoas(e) {
	var quadro = e.getAttribute("data-numerodoquadro");
	$("#quadropai"+quadro+" .num_pessoas-wrap #quadro"+quadro+" li").map(function () {					
		if(parseInt(this.getAttribute("data-id")) > parseInt(numPessoasId)) {
			document.getElementById(this.id).style.background = 'url("../components/com_popstilcustomizacao/assets/img/icon-pessoas.png") -16px 0px no-repeat';
		}
	})
	$("#quadropai"+quadro+" .num_pessoas-wrap #quadro"+quadro+" li").map(function () {
		if($('#idNumeroPessoas'+quadro).val() == '') {
			document.getElementById(this.id).style.background = 'url("../components/com_popstilcustomizacao/assets/img/icon-pessoas.png") -16px 0px no-repeat';
		}
	});
}
//Quando o usuario clica sobre o numero de pessoas
function onClickNumPessoas(e) {
	var quadro = e.getAttribute("data-numerodoquadro");
	var divTexto = e.getAttribute("data-numeropessoas");
	$("#num_pessoas_quadro"+quadro).html('<p>'+divTexto+'</p>');
	
	flagNumPessoas = true;
	var idNumPessoas = e.getAttribute("data-id");
	$('#idNumeroPessoas'+quadro).val(idNumPessoas);
	numPessoasId = e.getAttribute("data-id");
	
	//Pega o valor do quadro com aquele numero de pessoas.
	var preco = e.getAttribute("data-preco");
	//Seta o preço no input do tipo hidden
	$('#idNumeroPessoas'+quadro).attr("data-preco",preco);
	//Atualiza o preço total
	atualizaPreco();
}
//Método para "limpar" o numero de pessoas, volta para o padrao sem cor
function limpaNumeroPessoas(e) {

	var quadro = e.getAttribute("data-numerodoquadro");

	$("#quadropai"+quadro+" .num_pessoas-wrap #quadro"+quadro+">li").map(function() {
		$(this).css('display', 'none');
	});
	$("#num_pessoas_quadro"+quadro).html('&nbsp');
	
	$("#quadro"+quadro+" .numPessoas-demo").css('display','inline');
	
	$("#quadropai"+quadro+" .num_pessoas-wrap #quadro"+quadro+" li").map(function() {	
		document.getElementById(this.id).style.background = 'url("../components/com_popstilcustomizacao/assets/img/icon-pessoas.png") -16px 0px no-repeat';
	})
}


function readImage(input) {
	if(input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
			document.getElementById('textopreview').innerHTML = "";
			$('#blah').attr('src', e.target.result)
					.width(230)
					.height(230).css('display', 'block');
			
		}
		reader.readAsDataURL(input.files[0]);
	}	
}




function onClickMoldura(e) {
	var quadro = e.getAttribute("data-numerodoquadro");
	$("#molduraquadro"+quadro+" img").map(function () {					
		document.getElementById(this.id).style.background = 'none';
		if(this.id == e.id) {
			document.getElementById(this.id).style.background = "url('../components/com_popstilcustomizacao/assets/img/moldura_hover.png') 0px 0px no-repeat";
		}
	});
	var idCorMoldura = e.getAttribute("data-idMoldura");
	$('#idCorMoldura'+quadro).val(idCorMoldura);
}





function atualizaPreco() {
	var total = 0;
	//total += parseInt(precoParcial);
	$("#valorTotal").html('');
	var preco;
	for(var i = 0;i<numeroQuadros;i++ ) {
		preco = parseInt($('#idNumeroPessoas'+i).attr("data-preco"));
		if(preco > 0) {
			total += preco;
		}
	}
	if(total === 0 ) {
		$("#valorTotal").html('');
	}else{		
		$("#valorTotal").html('R$'+total);
	}
}

function onClickCorSolida(e) {
	$("#cores .cor span").map(function () {					
		document.getElementById(this.id).style['boxShadow'] = 'none';
		if(this.id == e.id) {
			document.getElementById(this.id).style['boxShadow'] = 'inset 0px 0px 0px 5px white';
		}
	});
}




var numeroQuadros = 1;

function atualizaNumeroQuadros(sinal) {
	//Se o cliente clicar no +1
	/*Se o usuario clicar no mais quadros o método geraQuadro ira criar randomicamente
	  o codigo html para o usuario - testar*/
	//geraQuadro(numeroQuadros);
	if(sinal) {
		switch(numeroQuadros) {
			case 1: {
				numeroQuadros += 1;
				$('#numero_quadros').html(numeroQuadros);
				//$('#quadropai1').slideDown();
				$('#quadropai1').stop(true,true).animate({height:"toggle",opacity:"toggle"},1000);
				break;
			}
			case 2: {
				numeroQuadros += 1;
				$('#numero_quadros').html(numeroQuadros);
				$('#quadropai2').stop(true,true).animate({height:"toggle",opacity:"toggle"},1000);
				break;
			}			
			case 3: {
				$('#numero_quadros').html(numeroQuadros);
				break;
			}
		}
	}else if(!sinal) {
		switch(numeroQuadros) {
			case 1: {
				$('#numero_quadros').html(numeroQuadros);
				break;
			}
			case 2: {
				numeroQuadros -= 1;
				$('#numero_quadros').html(numeroQuadros);
				$('#quadropai1').stop(true,true).animate({height:"toggle",opacity:"toggle"},1000);
				break;
			}			
			case 3: {
				numeroQuadros -= 1
				$('#numero_quadros').html(numeroQuadros);
				$('#quadropai2').stop(true,true).animate({height:"toggle",opacity:"toggle"},1000);
				break;
			}
		}
	}
}

function validacoes() {
	var validacao = false;
	var msg = '';
	
	if($("#inputdroparea").val() == '') {
		msg += "Ops... parece que você nao escolheu uma imagem para a arte </br>";
	}
	
	switch(numeroQuadros) {
		case 1: {
			msg += validaQuadro(0);
			break;
		}
		case 2: {
			msg += validaQuadro(0);
			msg += validaQuadro(1);
			break;
		}
		case 3: {
			msg += validaQuadro(0);
			msg += validaQuadro(1);
			msg += validaQuadro(2);
			break;
		}
	}
	
	if($.trim(msg) != '') {
		$("#msgValida").html(msg);
	}
	
	if(msg == '') {
		validacao = true;
	}else {
		validacao = false;
	}
	return validacao;
}

function validaQuadro(quadro) {
	var retorno = '';
	
	if($("#idTamanhoQuadro"+quadro).val() == '') {
		retorno = "Você nao escolheu o tamanho do quadro "+(quadro+1) + "</br>";
	}
	if($("#idNumeroPessoas"+quadro).val() == '') {
		retorno += "Você nao escolheu o número de pessoas do quadro "+(quadro+1) + "</br>";
	}
	if($("#idCorMoldura"+quadro).val() == '') {
		retorno += "Você nao escolheu a cor da moldura quadro "+(quadro+1) + "</br>";
	}
	
	return retorno;
		
}

//Método para adicionar mais 1 quadro a tela
function geraQuadro(numeroQuadro) {
	
	$('#container_pai').append(
		"Novo quadro gerado dinamicamente"+
		"<div id='quadropai"+numeroQuadro+"'> "+
			"<div class='row'>"+
				"<div class='span6'> "+
				"	<h3>O plano de fundo da arte terá:</h3>"+
					
					"<div>"+
						"<ul id='tabs' class='nav nav-tabs'>"+
							"<li class='active'><a href='#tabs-1' data-toggle='tab'><p>Única cor</p></a></li>		"+					
							"<li><a href='#tabs-2' data-toggle='tab'><p>Padrão gráfico</p></a></li>"+
						"</ul>"+
						"<div id='myTabContent' class='tab-content'>							"+
						"	<div id='tabs-1' class='tab-pane active'>"+
						"		<div class='tabcontent'>"+
						"			<p>Selecione uma das cores abaixo:</p>"+
						"			<div id='cores'>"+
						"				<div class='cor' >"+
						"					<span style='background-color:#123456;'"+
						"						  id='cor1'"+
						"						  onclick='onClickCorSolida(this)'"+
						"					></span>"+
						"				</div>"+
						"				<div class='cor'>"+
						"					<span  style='background-color:#987654'"+
						"						   id='cor2'"+
						"						   onclick='onClickCorSolida(this)'"+
						"					></span>"+
						"				</div>"+
						"				<div class='cor'>"+
						"					<span style='background-color:#147852' "+
						"						  id='cor3'"+
						"						  onclick='onClickCorSolida(this)'"+
						"					></span>"+
						"				</div>"+
						"			</div>"+
						"		</div>					"+
						"	</div>"+
						"	<div id='tabs-2' class='tab-pane'>"+
						"		<div class='tabcontent'>"+
						"			<p>Selecione um padrão e as cores:</p>"+
						"		</div>"+
						"	</div>"+
						"</div>"+
					"</div>"+
				"</div>"+
			"</div>"+
		"</div>"
	);
	
}