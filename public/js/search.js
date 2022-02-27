window.addEventListener('load',function(){
	
	document.getElementById("search").keyup(function(){
	document.getElementById("resultados").innerHTML = "Hola"
	
	if((document.getElementById("search").value.length)>=1)
	
	
fetch('/inmuebles/buscador?search=${document.getElementById("search").value}',{ method:'get'})
.then(response => response.text())
.then(html => { document.getElementById("resultados").innerHTML = html
document.getElementById("resultados").innerHTML = "Hola"
 })


});
});