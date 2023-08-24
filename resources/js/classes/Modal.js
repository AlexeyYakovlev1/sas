"use strict";

import Request from "./Request";

const request = new Request();

class Modal {
	constructor() {
		this.modalElement = document.querySelector(".modal");
		this.modalContentElement = document.querySelector(".modal__content");
	}

	// Показать модальное окно
	show() {
		this.modalElement.classList.remove("hidden");
		document.body.style.overflow = "hidden";
	}

	// Закрыть модальное окно
	close() {
		const urlObj = new URL(window.location.href);

		urlObj.search = "";

		window.location.href = urlObj.toString();
	}

	// При клике на контент модального окна не срабатывало закрытие
	propagationForContent() {
		this.modalContentElement.addEventListener("click", (event) => event.stopPropagation());
	}

	getInformation(url, query, headers = {}) {
		const params = new URLSearchParams(window.location.search);
		const id = params.get(query);
		const obj = {};

		obj[query] = id;

		const urlReq = `/api${url}?${new URLSearchParams(obj)}`;

		return request.get(urlReq, { headers });
	}
}

export default Modal;