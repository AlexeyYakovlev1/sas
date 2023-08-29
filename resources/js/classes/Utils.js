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
}

export default Utils;