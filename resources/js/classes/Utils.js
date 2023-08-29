"use strict";

import { general } from "../data.js";

const { HOST, CSRF } = general;

class Utils {
	/**
	 * Получение хоста
	 * @public
	 */
	getHost() { return HOST; };

	/**
	 * Получение csrf токена
	 * @public
	 */
	getCsrf() { return CSRF; };

	/**
	 * Получение данных из формы
	 * @param {string} inputsSelector Селектор input-ов
	 * @public
	 */
	getDataFromForm(inputsSelector) {
		const inputs = document.querySelectorAll(inputsSelector);

		const data = {};

		// Заносим значения инпутов в data
		inputs.forEach((input) => data[input.getAttribute("name")] = input.value);

		return data;
	}
}

export default Utils;