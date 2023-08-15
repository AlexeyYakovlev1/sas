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
	
	// Показать/Скрыть контент при нажатии на кнопку
	clickButtons(activeClass = "active") {
		this.buttons.forEach((btn, idx) => {
			btn.addEventListener("click", () => {
				// Для всего контента добавляем класс hidden, чтобы скрыть его
				this._addClass(this.contents, "hidden");
				// У всех кнопок убираем класс active
				this._removeClass(this.buttons, activeClass);
				
				// Для определенного контента убираем класс hidden, чтобы показать его
				this.contents[idx].classList.remove("hidden");
				// Для текущей кнопки добавляем класс active
				btn.classList.add(activeClass);
			});
		});
	}
}

export default Tabs;