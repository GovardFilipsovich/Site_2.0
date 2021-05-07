var number = 0;
element_menu = document.getElementById("Menu");
function output(){
	if (number == 0){
		number = 1;
		element_menu.removeAttribute("hidden");
	} else {
		number = 0;
		element_menu.setAttribute("hidden", "hidden");
	}
	
}