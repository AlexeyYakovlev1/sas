"use strict";

import Modal from "../../classes/Modal";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";
import Tabs from "../../classes/Tabs";
import { renderModalContent } from "./renderEmployees";

const modal = new Modal();
const alert = new Alert();
const loader = new Loader();
const tabs = new Tabs(".card__header-btn", ".card__content-item");

const renderDataToCard = (data) => renderModalContent(data);

// Получение информации для карточки
const getCardData = () => {
	const content = window.location.href.split("#").at(-1);

	modal.getInformation(`/employees/get_card_info/${content}`, "employee_id")
		.then((data) => {
			const { success, message, res } = data;

			if (message) alert.show(success, message);
			if (!success) {
				loader.close();
				return;
			}

			loader.close();

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

			window.history.replaceState(null, null, `?employee_id=${id}#description_from_director`);

			getCardData();

			modal.show();
			tabs.openCard();
		});
	});

	// При клике на задний фон скрываем окно с информацией
	employeeModal.addEventListener("click", () => modal.close("/home/employees"));

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!employeeModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			modal.close("/home/employees");
		}
	});
};

export { openCard, getCardData };