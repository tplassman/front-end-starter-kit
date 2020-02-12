import pop from "compop"

import Main from "./components/main.js";

const classMap = {
	'main': Main,
};

const actions = {
}

// Construct components on DOM content loaded
function handleDOMConentLoaded() {
	const scaffold = window["the-store"];

	function cb() {
		// Do something after components initialize
	}

	// Call component constructors
	pop({ scaffold, classMap, actions, cb });
}

// Attach event listener
document.addEventListener("DOMContentLoaded", handleDOMConentLoaded);
