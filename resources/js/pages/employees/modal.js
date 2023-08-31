"use strict";

import Modal from "../../classes/Modal";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";
import Tabs from "../../classes/Tabs";
import Utils from "../../classes/Utils";

import { renderModalContent } from "./renderEmployees";
import { general } from "../../data";

const modal = new Modal();
const alert = new Alert();
const loader = new Loader();
const tabs = new Tabs(".card__header-btn", ".card__content-item");
const utils = new Utils();

const { DEFAULT_TITLE_OF_EMPLOYEES } = general;

// При открытии модального окна
const renderDataToCard = (data) => renderModalContent(data);

// Получение информации для карточки
const getCardData = () => {
	const content = window.location.href
		.split("#")
		.at(-1); // main, docs, ...

	modal.getInformation(`/employees/get_card_info/${content}`, "employee_id")
		.then((data) => {
			const { success, message, res } = data;

			if (message) alert.show(success, message);
			if (!success) {
				loader.close();
				return;
			}

			loader.close();

			utils.setTitle(res.employee.id); // Здесь должно быть ФИО

			renderDataToCard(res);
		})
		.catch((error) => {
			loader.close();

			alert.show(false, error.message || "Ошибка при запросе данных");

			throw new Error(error);
		});
};

// Открытие/закрытие карточки
const openCard = (employeesListItems, employeeModal) => {
	// При клике на сотрудника забираем информацию с сервера и рендерим ее в модальном окне
	employeesListItems.forEach((item) => {
		item.addEventListener("dblclick", () => {
			const { id } = item.dataset;

			loader.show();

			const urlOfQuery = `?employee_id=${id}#description_from_director`;

			window.history.replaceState(null, null, urlOfQuery);

			getCardData();

			modal.show();
			tabs.openCard();
		});
	});

	// При клике на задний фон скрываем окно с информацией
	employeeModal.addEventListener("click", () => {
		modal.close("/home/employees");
		utils.setTitle(DEFAULT_TITLE_OF_EMPLOYEES);
	});

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!employeeModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			modal.close("/home/employees");
			utils.setTitle(DEFAULT_TITLE_OF_EMPLOYEES);
		}
	});
};

export { openCard, getCardData };