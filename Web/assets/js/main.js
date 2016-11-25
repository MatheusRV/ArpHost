var now = new Date();
var hours = now.getHours();
function BoasVindas() {         //Função de boas vindas (inicio da pagina)
	if (hours >= 00 && hours<=11){
		document.getElementById('saudacoes').innerHTML = ('<b><center>Bom Dia!</center></b>');
	}else if (hours >= 12 && hours <= 18){
		document.getElementById('saudacoes').innerHTML = ('<b><center>Boa Tarde!</b></center>');
	}else if (hours >= 18 && hours <= 23){
		document.getElementById('saudacoes').innerHTML = ('<b><center>Boa Noite!</b></center>');
	}
}
BoasVindas(); 

//icones
var elementoIcone = document.getElementById('icone');
if (hours >= 00 && hours<=11){
	elementoIcone.src = 'assets/images/icones/dia.png';
}else if (hours >= 12 && hours <= 18){
	elementoIcone.src = 'assets/images/icones/tarde.png';
}else if (hours >= 18 && hours <= 23){
	elementoIcone.src = 'assets/images/icones/noite.png';
}