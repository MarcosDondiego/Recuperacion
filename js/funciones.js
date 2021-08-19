document.getElementById("btnenviar").addEventListener("click", function(event){
    event.preventDefault();
    window.location="panel.html";
  });
  

    function mostrarFormulario1(id)
{
	var contenedor=document.getElementById("formu1");
	contenedor.style.display="block";

	var contenedor=document.getElementById("formu2");
	contenedor.style.display="none";
}

function mostrarFormulario2(id)
{
	var contenedor=document.getElementById("formu2");
	contenedor.style.display="block";

	var contenedor=document.getElementById("formu1");
	contenedor.style.display="none";
}


function limpiar(){
  document.getElementById("matricula").value="";
  document.getElementById("nombre").value="";
  document.getElementById("apellidos").value="";
  document.getElementById("grupo").value="";
  document.getElementById("carrera").value="";
  document.getElementById("grado").value="";
}



