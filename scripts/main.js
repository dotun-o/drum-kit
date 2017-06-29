window.addEventListener("DOMContentLoaded", main, false);

function main() {
	window.addEventListener("keydown", keySound, false);

	var buttons = document.getElementById("console").children;
	for(var i = 0; i < buttons.length; i++) {
		buttons[i].addEventListener("click", tapSound, false);
	}
}

function keySound(e) {
	var key = document.querySelector("button[data-key='" + e.keyCode + "']");

	if(key) {
		var soundName = key.getAttribute("data-name");
		var sound = document.querySelector("audio[src='audio/" + soundName + ".wav']");
		sound.currentTime = 0;
		sound.play();
	}
}

function tapSound() {
	var soundName = this.getAttribute("data-name");
	var sound = document.querySelector("audio[src='audio/" + soundName + ".wav']");
	sound.currentTime = 0;
	sound.play();
}