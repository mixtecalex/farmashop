

/*
desplegarDiv(divId,X,Y,tiempoDespliegue)
	-FUNCION: Desplegar un div en una posicion de la pantalla
	divId:				identificador del div
	x: 					Posicion en x origen
	y: 					Posicion en y origen
	x:					Posicion en X destino
	Y:					Posicion en Y destino
	tiempoDespliegue:	tiempo que tomara al div llegar a su destino

*/

function desplegarDiv(divId,x,y,X,Y,tiempoDespliegue){
	div = document.getElementById(divId);
	//primero hacemos visible al div
	div.style.visibility = "visible";
	div.style.position = "absolute";
	moverDiv(divId,x,y,X,Y,tiempoDespliegue);
}

function moverDiv(divId,x,y,X,Y,tiempo){
	div = document.getElementById(divId);
	div.style.left  = x+"px";
	div.style.top   = y+"px";
	trasladoX = Math.abs(X-x)/tiempo;
	trasladoY = Math.abs(Y-y)/tiempo;
	intervalo1= setInterval(function(){reposicionar(div,x,trasladoX,y,trasladoY,X,Y)},tiempo);
	
}

function reposicionar(div,x,X,y,Y,xFinal,yFinal){
	div.style.top  = (parseFloat(div.style.top)+Y)+"px";
	div.style.left = (parseFloat(div.style.left)+X)+"px";
	if(xFinal<=parseFloat(div.style.left) && yFinal<=parseFloat(div.style.top)){
		clearInterval(intervalo1);
	}
	
}