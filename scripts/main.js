window.addEventListener("DOMContentLoaded", main, false);

function main() {
	window.addEventListener("keydown", playSound, false);
}

function playSound(e) {
	var key = document.querySelector("button[data-key='" + e.keyCode + "']");

	if(key) {
		var soundName = key.getAttribute("data-name");
		var sound = document.querySelector("audio[src='audio/" + soundName + ".wav']");
		sound.currentTime = 0;
		sound.play();

		//colors
	}
}