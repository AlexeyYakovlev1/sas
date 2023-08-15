"use strict";

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
		this.modalElement.classList.add("hidden");
		document.body.style.overflow = "visible";
	}

	// При клике на контент модального окна не срабатывало закрытие
	propagationForContent() {
		this.modalContentElement.addEventListener("click", (event) => event.stopPropagation());
	}
}

export default Modal;