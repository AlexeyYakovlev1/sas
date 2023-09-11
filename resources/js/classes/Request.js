"use strict";

import Utils from "./Utils";

class Request extends Utils {
	constructor() {
		super();

		this.host = this.getHost();
		this.csrf = this.getCsrf();
	}

	/**
	 * Объединение заголовков
	 * @param {object} headers Дополнительные заголовки
	 * @private
	 */
	_assignHeaders(headers = {}) {
		return Object.assign(headers, {
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
		const finishUrl = `${this.host}${url}`;

		return fetch(finishUrl, {
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
		const finishUrl = `${this.host}${url}`;

		return fetch(finishUrl, {
			method: "GET",
			headers: allHeaders
		})
			.then((response) => response.json());
	}
}

export default Request;