"use strict";

import Alert from "./Alert";
import Request from "./Request";
import Loader from "./Loader";

const alert = new Alert();
const request = new Request();
const loader = new Loader();

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

			// Обращение к серверу для удаления столбца
			// ...
		});
	}

	/**
	 * Получение данных из таблицы
	 * @param {string} inputSelector Селектор для input-ов таблицы
	 * @private
	 */
	_getData(inputSelector) {
		const res = {};

		const thead = this.table.firstElementChild;
		const tds = thead.querySelectorAll("td");

		tds.forEach((td) => {
			res[td.className] = [...this.table.querySelectorAll(`${inputSelector}.${td.className}`)]
				.map((item) => item.value);
		});

		return res;
	}

	/**
	 * Отправка данных с таблицы
	 * @param {HTMLElement} submit HTML кнопка  
	 * @param {string} tableName Название таблицы
	 * @param {string} inputSelector Селектор для input-ов
	 * @param {Function} callback Функция, которая выполнится при отправке запроса
	 * @public
	 */
	submitData(submit, tableName, inputSelector, callback) {
		submit.addEventListener("click", () => {
			loader.show();

			const finishUrl = `/api/students${tableName}/update`;
			const params = {
				data: JSON.stringify(this._getData(inputSelector)),
				headers: { "Content-Type": "application/json" }
			};

			request.post(finishUrl, params)
				.then((dataFromServ) => {
					const { success, message } = dataFromServ;

					if (message) alert.show(success, message);
					if (!success) {
						loader.close();
						return;
					}

					callback(dataFromServ);
					loader.close();
				});
		});
	}
}

export default Table;