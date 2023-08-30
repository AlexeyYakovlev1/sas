"use strict";

import Request from "./Request";
import Utils from "./Utils";

const request = new Request();

class Modal extends Utils {
	constructor() {
		super();

		this.modalElement = document.querySelector(".modal");
		this.modalContentElement = document.querySelector(".modal__content");
	}

	/**
	 * Показать модальное окно
	 * @public
	 */
	show() {
		this.modalElement.classList.remove("hidden");
		document.body.style.overflow = "hidden";
	}

	/**
	 * Закрыть модальное окно
	 * @param {string} url Ссылка, которая будет при закрытии
	 * @public
	 */
	close(url) {
		const repUrl = `${this.getHost()}${url}`;

		window.history.replaceState({}, document.title, repUrl);

		this.modalElement.classList.add("hidden");
		document.body.style.overflow = "visible";
	}

	/**
	 * При клике на контент модального окна не срабатывает закрытие
	 * @public
	 */
	propagationForContent() {
		this.modalContentElement.addEventListener("click", (event) => event.stopPropagation());
	}

	/**
	 * Получение информации
	 * @param {string} url Ссылка для получения информации
	 * @param {string} query Параметр (id)
	 * @param {object} headers Заголовки запроса
	 * @public
	 */
	getInformation(url, query, headers = {}) {
		const params = new URLSearchParams(window.location.search);
		const id = params.get(query);
		const obj = {};

		obj[query] = id;

		const finishQuery = new URLSearchParams(obj);
		const urlReq = `/api${url}?${finishQuery}`;

		return request.get(urlReq, { headers });
	}
}

export default Modal;