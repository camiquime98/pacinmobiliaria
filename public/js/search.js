window.addEventListener('load',function(){
	  
	var boton = document.getElementById("boton");

// cuando se pulsa en el enlace
boton.onclick = function(e) {	
	
	if((document.getElementById("search").value.length)>=1)
	var x =document.getElementById("search").value;
	document.getElementById("resultados").innerHTML = "Hola"
fetch('inmuebles/buscador?search='+ x,{ method:'get'})
.then(response => response.text())
.then(html => { document.getElementById("resultados").innerHTML = html

 })
}
});