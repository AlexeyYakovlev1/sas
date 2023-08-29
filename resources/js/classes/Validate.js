"use strict";

class Validate {
	constructor(inputSelector) {
		this.rules = []; // [{ rule: validator.<method>, message: <message>, name: <name> }]
		this.inputSelector = inputSelector;
	}

	/**
	 * Проверка на валидность всех правил
	 * @private
	 */
	_isValid() {
		return !this.rules.some((rule) => !rule.valid);
	}

	/**
	 * Запуск
	 * @param {Array<Object>} rules Список правил для валидации данных ([{ rule: validator.<method>, message: <message>, name: <name> }])
	 * @public
	 */
	init(rules) {
		this.rules = rules;

		// Удаляем у всех input-ов класс error
		document.querySelectorAll(this.inputSelector).forEach((item) => item.classList.remove("error"));

		// Если форма невалидна
		if (!this._isValid()) {
			// Находим имя input-а, правило которого невалидно
			const { name } = this.rules.find((rule) => !rule.valid);

			// Конкретному input-у вешаем класс error
			document.querySelector(`${this.inputSelector}[name=${name}]`).classList.add("error");

			return false;
		}

		return true;
	}
}

export default Validate;