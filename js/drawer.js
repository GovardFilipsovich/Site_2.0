var canvas = document.getElementById("Canvas"),
ctx = canvas.getContext('2d');
canvas.width  = 650;
canvas.height = 750;
var list = document.getElementById("Choise");
var image = new Image();

var x = 275;
var y = 50;


//Выбор значения из списка
list.onchange = function() {
	alert(list.value);
}

var button_down = document.getElementById('but2');
button_down.onclick = function() {
	ctx.clearRect(x, y, 100, 51);
	y += 10;
	ctx.drawImage(image, x, y);
}

var button_up = document.getElementById('but1');
button_up.onclick = function() {
	ctx.clearRect(x, y, 100, 51);
	y -= 10;
	ctx.drawImage(image, x, y);
}

var button_left = document.getElementById('but3');
button_left.onclick = function() {
	ctx.clearRect(x, y, 100, 51);
	x -= 10;
	ctx.drawImage(image, x, y);
}

var button_right = document.getElementById('but4');
button_right.onclick = function() {
	ctx.clearRect(x, y, 100, 51);
	x += 10;
	ctx.drawImage(image, x, y);
}

var button_enter = document.getElementById('but5');
button_enter.onclick = function() {
	image.src = list.value;
}
