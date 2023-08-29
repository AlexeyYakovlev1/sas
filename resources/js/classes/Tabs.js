"use strict";

import Request from "./Request";
import Loader from "./Loader";

const request = new Request();
const loader = new Loader();

class Tabs {
	constructor(buttonsSelector, contentsSelector, pageUrl) {
		this.buttons = document.querySelectorAll(buttonsSelector);
		this.contents = document.querySelectorAll(contentsSelector);
		this.contentsSelector = contentsSelector;
		this.pageUrl = pageUrl;
	}

	/**
	 * Добавляет класс ко всем html элементам (items)
	 * @param {HTMLCollection | NodeList} items HTML список элементов, которым нужно добавить класс
	 * @param {string} cls CSS класс
	 * @private
	 */
	_addClass(items, cls) { items.forEach((item) => item.classList.add(cls)); };

	/**
	 * Убирает класс у всех html элементов (items)
	 * @param {HTMLCollection | NodeList} items HTML список элементов, которым нужно убрать класс
	 * @param {string} cls CSS класс
	 * @private
	 */
	_removeClass(items, cls) { items.forEach((item) => item.classList.remove(cls)); };

	/**
	 * Получение информации относительно хеша в ссылке
	 * @param {string} hash Хеш с ссылки (#main, #docs, ...)
	 * @private
	 */
	_getContentByHash(hash) {
		const params = new URLSearchParams(window.location.search);
		const query = window.location.href
			.split("?")[1]
			.split("#")[0]
			.split("=")[0]; // student_id; employee_id, ...
		const id = params.get(query);
		const obj = {};

		obj[query] = id;

		const url = `/api/${this.pageUrl}/get_card_info/${hash}?${new URLSearchParams(obj)}`;

		return request.get(url, { headers: {} });
	}

	/**
	 * Срабатывает при открытии карточки
	 * @param {string} activeClass CSS класс, для кнопок
	 * @public
	 */
	openCard(activeClass = "active") {
		const hash = window.location.hash.slice(1); // main, docs, ...

		// Скрываем все блоки с контентом
		this._addClass(this.contents, "hidden");
		// Делаем все кнопки неактивными
		this._removeClass(this.buttons, activeClass);

		// Находим контент, у которого id совпадает с hash
		const findContent = [...this.contents].find((content) => content.getAttribute("id") === hash);
		const findBtn = [...this.buttons].find((button) => {
			// У кнопки ищем ссылку, у которой часть href совпадает с hash
			const link = [...button.childNodes].find(({ nodeName }) => nodeName === "A").href;

			// У ссылки забираем хеш и проверям его с текущим
			return link.split("#").at(-1) === hash;
		});

		if (!findContent || !findBtn) return;

		// Отрисовываем определенный контент и добавляем activeClass кнопке
		findContent.classList.remove("hidden");
		findBtn.classList.add(activeClass);
	}

	/**
	 * Показать/Скрыть контент при нажатии на кнопку
	 * @param {string} activeClass CSS класс, для кнопок
	 * @public
	 */
	clickButtons(activeClass = "active", callback = function () { }) {
		this.buttons.forEach((btn) => {
			btn.addEventListener("click", () => {
				loader.show();

				// Для всего контента добавляем класс hidden, чтобы скрыть его
				this._addClass(this.contents, "hidden");

				// У всех кнопок убираем класс active
				this._removeClass(this.buttons, activeClass);

				const currentHash = [...btn.childNodes]
					.find(({ nodeName }) => nodeName === "A").href
					.split("#")
					.at(-1)
					.slice(0); // main, docs, ...

				// Получаем данные для конкретного хеша (ссылки #)
				this._getContentByHash(currentHash)
					.then((data) => {
						const { res } = data;

						callback(res);

						loader.close();
					});

				// Для текущей кнопки добавляем класс active
				btn.classList.add(activeClass);
			});
		});
	}
}

export default Tabs;