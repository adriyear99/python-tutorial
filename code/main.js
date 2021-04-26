function start() {
	let valor = confirm('Parabéns por finalizar o tutorial. Agora seu conhecimento será testado.');

	if (valor){
		document.getElementById("demo").innerHTML = "O teste será iniciado...";
		document.getElementById("demo").style.color = "red";
		document.getElementById("botao").innerHTML = "Carregando...";
		document.getElementById("botao").style.color = "red";
		setTimeout(function change(){
			window.location.href = "teste.html";
		},2000);
	}
}

function modal(id){
	document.getElementById(id).style.display="block";
}




function result(){
	window.location.href = "resultados.php";
}

function answer(){
	window.location.href = "gabarito.html";
}