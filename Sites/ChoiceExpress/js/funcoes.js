// JavaScript Document
function mudarclass(id) {
var elemento = document.getElementById(id);
if (elemento.className == "normal") {
elemento.className = "current";
}
else {
elemento.className = "normal";
}
}