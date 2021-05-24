function start() {
	let valor = confirm('Parabéns por finalizar o tutorial. Agora seu conhecimento será testado.');

	if (valor){
		document.getElementById("demo").innerHTML = "O teste será iniciado...";
		document.getElementById("demo").style.color = "red";
		document.getElementById("botao").innerHTML = "Carregando...";
		document.getElementById("botao").style.color = "white";
		document.getElementById("botao").style.background = "lightgreen";
		document.getElementById("botao").style.border = "2px solid green";
		setTimeout(function change(){
			window.location.href = "teste.html";
		},2000);
	}
}

function modal(id){
	var x = document.getElementById(id);
	if(x.style.display == "block"){
		x.style.display = "none"
	}else{
		x.style.display = "block"
	}
}

function gif(){
	setTimeout(function change(){
		document.getElementById("animation").style.display = "none";
		document.getElementById("preencher").style.display = "none";
	},3000);
}

function result(){
	window.location.href = "resultados.php";
}

function answer(){
	window.location.href = "gabarito.html";
}