"use strict";

import Modal from "../../classes/Modal";
import Loader from "../../classes/Loader";
import Request from "../../classes/Request";
import Alert from "../../classes/Alert";

const modal = new Modal();
const loader = new Loader();
const request = new Request();
const alert = new Alert();

// Закрытие карточки студента
const closeModal = () => {
	loader.show();

	const urlObj = new URL(window.location.href);

	urlObj.search = "";

	modal.close();
	loader.close();

	window.location.href = urlObj.toString();
};

// Получение информации для карточки
const renderInformation = () => {
	const params = new URLSearchParams(window.location.search);
	const id = params.get("student_id");

	const url = `/api/students/get_card_info?${new URLSearchParams({ student_id: id })}`;

	request.get(url, { headers: {} })
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
	studentsModal.addEventListener("click", () => closeModal());

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!studentsModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			closeModal();
		}
	});
};

export {
	openCard, renderInformation
};