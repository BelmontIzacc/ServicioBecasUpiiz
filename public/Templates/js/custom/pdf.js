var ventana;
function descargarPDF(){
	ventana = window.open("/descarga","nuevo","width=500,height=100");
	//setTimeout("cerrar()",6800);
	//ventana.close();
	setTimeout(function(){ ventana.close(); }, 3000);
}

function cerrar(){
	ventana.close();
}