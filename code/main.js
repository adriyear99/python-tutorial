function iniciar() { 
  document.getElementById("demo").innerHTML = "O teste será iniciado...";
  document.getElementById("demo").style.fontSize = "25px";
  document.getElementById("demo").style.color = "red";
  document.getElementById("botao").innerHTML = "Carregando...";
}

function start(){
	alert("Parabéns por finalizar o tutorial. Agora seu conhecimento será testado.")
	window.location.href = "teste.html";
}