"use strict";

class Loader {
	constructor() {
		this.loaderElement = document.querySelector(".loader__wrapper");
	}

	// Показать загрузчик
	show() { this.loaderElement.style.display = "block"; }

	// Закрыть загрузчик
	close() { this.loaderElement.style.display = "none"; }
}

export default Loader;