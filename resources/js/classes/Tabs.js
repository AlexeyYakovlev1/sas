"use strict";

class Tabs {
	constructor(buttonsSelector, contentsSelector) {
		this.buttons = document.querySelectorAll(buttonsSelector);
		this.contents = document.querySelectorAll(contentsSelector);
	}

	//	Добавляет класс ко всем html элементам (items)
	_addClass(items, cls) { items.forEach((item) => item.classList.add(cls)); };

	//	Убирает класс у всех html элементов (items)
	_removeClass(items, cls) { items.forEach((item) => item.classList.remove(cls)); };

	// При открытии карточки
	openCard(activeClass = "active") {
		// Забираем hash из url (без начального #)
		const hash = window.location.hash.slice(1);

		this._addClass(this.contents, "hidden");
		this._removeClass(this.buttons, activeClass);

		// Находим контент, у которого id совпадает с hash
		const findContent = [...this.contents].find((content) => content.getAttribute("id") === hash);
		const findBtn = [...this.buttons].find((button) => {
			// У кнопки ищем ссылку, у которой часть href совпадает с hash
			const link = [...button.childNodes].find(({ nodeName }) => nodeName === "A").href;

			return link.split("#").at(-1) === hash;
		});

		if (!findContent || !findBtn) return;

		// Отрисовываем определенный контент и добавляем activeClass кнопке
		findContent.classList.remove("hidden");
		findBtn.classList.add(activeClass);
	}

	// Показать/Скрыть контент при нажатии на кнопку
	clickButtons(activeClass = "active", callback = function () { }) {
		this.buttons.forEach((btn) => {
			btn.addEventListener("click", () => {
				// Для всего контента добавляем класс hidden, чтобы скрыть его
				this._addClass(this.contents, "hidden");

				// У всех кнопок убираем класс active
				this._removeClass(this.buttons, activeClass);

				const link = [...btn.childNodes].find(({ nodeName }) => nodeName === "A").href;

				callback(link, this.contents);

				// Для текущей кнопки добавляем класс active
				btn.classList.add(activeClass);
			});
		});
	}
}

export default Tabs;