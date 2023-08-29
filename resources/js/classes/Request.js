"use strict";

import Utils from "./Utils";

const utils = new Utils();

class Request {
	constructor() {
		this.host = utils.getHost();
		this.csrf = utils.getCsrf();
	}

	/**
	 * Объединение заголовков
	 * @param {object} headers Дополнительные заголовки
	 * @private
	 */
	_assignHeaders(headers = {}) {
		return Object.assign(headers || {}, {
			"X-Requested-With": "XMLHttpRequest",
			"X-CSRF-TOKEN": this.csrf
		});
	}

	/**
	 * POST запрос
	 * @param {string} url Ссылка для получения информации
	 * @param {object} params Параметры запроса
	 * @public
	 */
	post(url, params) {
		const allHeaders = this._assignHeaders(params.headers);

		return fetch(`${this.host}${url}`, {
			method: "POST",
			headers: allHeaders,
			body: params.data
		})
			.then((response) => response.json());
	}

	/**
	 * GET запрос
	 * @param {string} url Ссылка для получения информации
	 * @param {object} params Параметры запроса
	 * @public
	 */
	get(url, params) {
		const allHeaders = this._assignHeaders(params.headers);

		return fetch(`${this.host}${url}`, {
			method: "GET",
			headers: allHeaders
		})
			.then((response) => response.json());
	}
}

export default Request;