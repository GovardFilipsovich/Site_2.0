var canvas = document.getElementById("Canvas"),
ctx = canvas.getContext('2d');
canvas.width  = 650;
canvas.height = 750;
var list = document.getElementById("Choise");
var image = new Image();
image.src = "src/start.png"
image.onload = function() {
	ctx.drawImage(image, 50, 50);
}


//Выбор значения из списка
list.onchange = function() {
	alert(list.value);
}
