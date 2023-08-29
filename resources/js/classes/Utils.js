"use strict";

import { CSRF, HOST } from "../data.js";

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