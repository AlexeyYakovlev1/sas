"use strict";

import Modal from "../../classes/Modal";
import Loader from "../../classes/Loader";
import Alert from "../../classes/Alert";

const modal = new Modal();
const loader = new Loader();
const alert = new Alert();

// Получение информации для карточки
const renderInformation = () => {
	modal.getInformation("/students/get_card_info", "student_id")
		.then((data) => {
			const { success, message, data: dataFromServer } = data;

			if (message) alert.show(success, message);
			if (!success) {
				loader.close();
				return;
			}

			loader.close();
			alert.show(true, `Вы получили данные студента ${dataFromServer.personId}`);
		})
		.catch((error) => {
			alert.show(false, error.message || "Ошибка при получении данных");

			loader.close();

			throw new Error(error);
		});
}

// Открытие/закрытие карточки
const openCard = (studentsListItem, studentsModal) => {
	// При даблклике открываем окно с информацией
	studentsListItem.forEach((item, idx) => {
		item.addEventListener("dblclick", () => {
			loader.show();

			document.querySelectorAll(".student__link")[idx].click();
		});
	});

	// При клике на задний фон скрываем окно с информацией
	studentsModal.addEventListener("click", () => modal.close());

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!studentsModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			modal.close();
		}
	});
};

export {
	openCard, renderInformation
};