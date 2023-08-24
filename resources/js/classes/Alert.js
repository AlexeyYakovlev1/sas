"use strict";

class Alert {
	constructor() {
		this.alertElement = document.querySelector(".alert");
	}

	// Показать оповещение
	show(success, message) {
		this.close();

		this.alertElement.style.display = "block";
		this.alertElement.className = `alert ${success ? "success" : "error"}`;

		const imgClass = success ? "success" : "error";

		document.querySelector(`.alert__${imgClass}-img`).classList.remove("hidden");
		document.querySelector(".alert__description").innerHTML = `
			<span class="alert__status">${success ? "Успех:" : "Ошибка:"}</span>
			${message}
		`;
	}

	// Закрыть оповещение
	close() {
		this.alertElement.style.display = "none";
		this.alertElement.className = "alert";

		document.querySelector(".alert__description").innerHTML = "";
		document.querySelectorAll(".alert__img").forEach((img) => img.classList.add("hidden"));
	}
}

export default Alert;