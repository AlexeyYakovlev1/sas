"use strict";

import Alert from "./Alert";

const alert = new Alert();

class Table {
	constructor(btnAddSelector, btnDeleteSelector, tableSelector) {
		this.addBtn = document.querySelector(btnAddSelector);
		this.deleteBtn = document.querySelector(btnDeleteSelector);
		this.table = document.querySelector(tableSelector);
	}

	/**
	 * Проверка на заполненность полей столбца
	 * @param {NodeList} newRows Список новых столбцов таблицы
	 * @private
	 */
	_checkFillRow(newRows) {
		const arr = [...newRows[newRows.length - 1].children].map((item) => {
			return item.children[0].value || null;
		});

		return arr.every((item) => item);
	}

	/**
	 * Добавление столбца в таблицу
	 * @param {string} htmlRow Строчка html столбца
	 * @param {string} cls Класс темы таблицы
	 * @public
	 */
	add(htmlRow, cls) {
		this.addBtn.addEventListener("click", () => {
			const newRows = document.querySelectorAll(`.new-row.${cls}`);

			if (newRows.length && !this._checkFillRow(newRows)) {
				alert.show(false, "Заполните существующие столбцы");
				return;
			}

			this.table.insertAdjacentHTML("beforeend", htmlRow);
		});
	}

	/**
	 * Удаление столбца из таблицы
	 * @param {string} cls Класс темы таблицы
	 * @public
	 */
	remove(cls) {
		this.deleteBtn.addEventListener("click", () => {
			const newRows = document.querySelectorAll(`.new-row.${cls}`);

			if (newRows.length === 1) {
				alert.show(false, "Первый столбец удалить нельзя");
				return;
			}

			newRows[newRows.length - 1].remove();
		});
	}
}

export default Table;