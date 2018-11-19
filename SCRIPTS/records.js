
var toggleRecord = function (id) {
	var bg;

	bg = document.getElementById(id).style.backgroundColor;

	if (bg === "rgb(189, 144, 40)")
		bg = document.getElementById(id).style.backgroundColor = '#e2c47e';
	else
		bg = document.getElementById(id).style.backgroundColor = '#bd9028';

};