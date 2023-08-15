"use strict";

class Utils {
	// Получение хоста
	getHost() {
		return "http://127.0.0.1:8000";
	}

	// Получение csrf токена
	getCsrf() {
		return document.querySelector("meta[name=csrf-token]").content;
	}
}

export default Utils;