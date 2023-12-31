"use strict";

import { general } from "../data.js";

const { HOST, CSRF } = general;

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

	/**
	 * Получение данных из формы
	 * @param {string} inputsSelector Селектор input-ов
	 * @public
	 */
	getDataFromForm(inputsSelector) {
		const inputs = document.querySelectorAll(inputsSelector);

		const data = {};

		// Заносим значения инпутов в data
		inputs.forEach((input) => data[input.getAttribute("name")] = input.value);

		return data;
	}

	/**
	 * Проверка на HTMLCollection, NodeList
	 * @param {HTMLElement} html HTML элемент 
	 */
	isHTMLList(html) {
		// Если html элемент наследуется от коллекции или нод листа
		return html instanceof HTMLCollection || html instanceof NodeList;
	}

	/**
	 * Добавляет класс ко всем html элементам (items)
	 * @param {HTMLCollection | NodeList} items HTML список элементов, которым нужно добавить класс
	 * @param {string} cls CSS класс
	 * @private
	 */
	addClass(items, cls) {
		if (this.isHTMLList(items)) {
			items.forEach((item) => item.classList.add(cls));
			return;
		}

		items.classList.add(cls);
	};

	/**
	 * Убирает класс у всех html элементов (items)
	 * @param {HTMLCollection | NodeList} items HTML список элементов, которым нужно убрать класс
	 * @param {string} cls CSS класс
	 * @private
	 */
	removeClass(items, cls) {
		if (this.isHTMLList(items)) {
			items.forEach((item) => item.classList.remove(cls));
			return;
		}

		items.classList.add(cls);
	};

	/**
	 * @param {string} title Заголовок для страницы
	 * @public
	 */
	setTitle(title) {
		document.title = title;
	};

	/**
	 * Проверка query для модальных окон (чтобы убрать скролл)
	 * @param {string} query Параметр, который нужно получить из ссылки
	   * @public
	 */
	checkQuery(query) {
		const urlParams = new URLSearchParams(window.location.search);
		const q = urlParams.get(query);

		if (q) document.body.style.overflow = "hidden";
	}
}

export default Utils;