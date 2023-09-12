"use strict";

class Alert {
	constructor() {
		this.alertElement = document.querySelector(".alert");
	}

	/**
	 * Показать оповещение
	 * @param {boolean} success Тип сообщения (успех, ошибка)
	 * @param {string} message Сообщение
	 * @public
	 */
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

		// После показа закрываем через определенное кол-во времени
		this._closeThroughTime();
	}

	/**
	 * Закрыть оповещение
	 * @public
	 */
	close() {
		this.alertElement.style.display = "none";
		this.alertElement.className = "alert";

		document.querySelector(".alert__description").innerHTML = "";
		document.querySelectorAll(".alert__img").forEach((img) => img.classList.add("hidden"));
	}

	/**
	 * Закрыть через 10 сек
	 * @param {number} time Время, через которое закроется оповещение
	 * @private
	 */
	_closeThroughTime(time = 10000) {
		setTimeout(() => { this.close(); }, time);
	}
}

export default Alert;