"use strict";

class Loader {
	constructor() {
		this.loaderElement = document.querySelector(".loader__wrapper");
	}

	/**
	 * Показать загрузчик
	 * @public
	 */
	show() { this.loaderElement.style.display = "block"; }

	/**
	 * Закрыть загрузчик
	 * @public
	 */
	close() { this.loaderElement.style.display = "none"; }
}

export default Loader;