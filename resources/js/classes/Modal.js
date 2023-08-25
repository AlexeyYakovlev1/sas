"use strict";

import Request from "./Request";
import Utils from "./Utils";

const request = new Request();
const utils = new Utils();

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
	close(url) {
		window.history.replaceState({}, document.title, `${utils.getHost()}${url}`);
		this.modalElement.classList.add("hidden");
		document.body.style.overflow = "visible";
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