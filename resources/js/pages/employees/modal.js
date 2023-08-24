"use strict";

import Modal from "../../classes/Modal";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";

const modal = new Modal();
const alert = new Alert();
const loader = new Loader();

// Получение информации для карточки
const renderInformation = () => {
	modal.getInformation("/employees/get_card_info", "employee_id")
		.then((data) => {
			const { success, message, data: dataFromServer } = data;

			if (message) alert.show(success, message);
			if (!success) {
				loader.close();
				return;
			}

			loader.close();
			alert.show(true, `Вы получили данные сотрудника ${dataFromServer.personId}`);
		})
		.catch((error) => {
			loader.close();

			alert.show(false, error.message || "Ошибка при запросе данных");

			throw new Error(error);
		});
};

const openCard = (employeesListItems, employeeModal,) => {
	// При клике на сотрудника забираем информацию с сервера и рендерим ее в модальном окне
	employeesListItems.forEach((item, idx) => {
		item.addEventListener("dblclick", () => {
			loader.show();

			document.querySelectorAll(".employees__link")[idx].click();
		});
	});

	employeeModal.addEventListener("click", () => modal.close());

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!employeeModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			modal.close();
		}
	});
};

export {
	openCard, renderInformation
};