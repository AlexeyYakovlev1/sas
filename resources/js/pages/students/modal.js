"use strict";

import Modal from "../../classes/Modal";
import Loader from "../../classes/Loader";
import Alert from "../../classes/Alert";
import Tabs from "../../classes/Tabs";

const modal = new Modal();
const loader = new Loader();
const alert = new Alert();
const tabs = new Tabs(".students__card-btn", ".card__section");

const renderDataToCard = (data) => {
	console.log(`Render some information...`);
	console.log(data);
};

// Получение информации для карточки
const getCardData = () => {
	const content = window.location.href.split("#").at(-1);

	modal.getInformation(`/students/get_card_info/${content}`, "student_id")
		.then((data) => {
			const { success, message, data: dataFromServer } = data;

			if (message) alert.show(success, message);
			if (!success) {
				loader.close();
				return;
			}

			loader.close();

			renderDataToCard(dataFromServer);
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

			window.history.replaceState(null, null, `?student_id=${id}#main`);

			getCardData();

			modal.show();
			tabs.openCard();
		});
	});

	// При клике на задний фон скрываем окно с информацией
	studentsModal.addEventListener("click", () => modal.close("/home/students"));

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!studentsModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			modal.close("/home/students");
		}
	});
};

export {
	openCard, getCardData
};