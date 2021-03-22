function start() {
	let valor = confirm('Parabéns por finalizar o tutorial. Agora seu conhecimento será testado.');

	if (valor){
		document.getElementById("demo").innerHTML = "O teste será iniciado...";
		document.getElementById("demo").style.fontSize = "25px";
		document.getElementById("demo").style.color = "red";
		document.getElementById("botao").innerHTML = "Carregando...";
		setTimeout(function change(){
			window.location.href = "teste.html";
		},2000);
	}
}