"use strict";

class Modal {
	constructor() {
		this.modalElement = document.querySelector(".modal");
		this.modalContentElement = document.querySelector(".modal__content");
	}

	show() {
		this.modalElement.classList.remove("hidden");
		document.body.style.overflow = "hidden";
	}

	close() {
		this.modalElement.classList.add("hidden");
		document.body.style.overflow = "visible";
	}

	propagationForContent() {
		this.modalContentElement.addEventListener("click", (event) => event.stopPropagation());
	}
}

export default Modal;