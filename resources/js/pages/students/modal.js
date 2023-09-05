"use strict";

import Modal from "../../classes/Modal";
import Loader from "../../classes/Loader";
import Alert from "../../classes/Alert";
import Tabs from "../../classes/Tabs";
import Utils from "../../classes/Utils";

import { renderModalContent } from "./renderStudents";
import { general } from "../../data";

const modal = new Modal();
const loader = new Loader();
const alert = new Alert();
const tabs = new Tabs(".students__card-btn", ".card__section");
const utils = new Utils();

const { DEFAULT_TITLE_OF_STUDENTS } = general;

// При открытии модального окна
const renderDataToCard = (data) => renderModalContent(data);

// Получение информации для карточки
const getCardData = () => {
	const content = window.location.href
		.split("#")
		.at(-1); // main, docs, ...

	modal.getInformation(`/students/get_card_info/${content}`, "student_id")
		.then((data) => {
			const { success, message, res } = data;

			if (message) alert.show(success, message);
			if (!success) {
				loader.close();
				return;
			}

			loader.close();

			utils.setTitle(res.student.full_name);

			renderDataToCard(res);
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
	studentsListItem.forEach((item) => {
		item.addEventListener("dblclick", () => {
			const { id } = item.dataset;

			loader.show();

			const urlOfQuery = `?student_id=${id}#main`;

			window.history.replaceState(null, null, urlOfQuery);

			getCardData();

			modal.show();
			tabs.openCard();
		});
	});

	// При клике на задний фон скрываем окно с информацией
	studentsModal.addEventListener("click", () => {
		modal.close("/home/students");
		utils.setTitle(DEFAULT_TITLE_OF_STUDENTS);
	});

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!studentsModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			modal.close("/home/students");
			utils.setTitle(DEFAULT_TITLE_OF_STUDENTS);
		}
	});
};

export { openCard, getCardData };