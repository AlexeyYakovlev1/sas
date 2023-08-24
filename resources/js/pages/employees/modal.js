"use strict";

import Modal from "../../classes/Modal";
import Request from "../../classes/Request";
import Alert from "../../classes/Alert";
import Loader from "../../classes/Loader";

const modal = new Modal();
const request = new Request();
const alert = new Alert();
const loader = new Loader();

const closeModal = () => {
	loader.show();

	const urlObj = new URL(window.location.href);

	urlObj.search = "";

	modal.close();
	loader.close();

	window.location.href = urlObj.toString();
};

const renderInformation = () => {
	const params = new URLSearchParams(window.location.search);
	const id = params.get("employee_id");

	const url = `/api/employees/get_card_info?${new URLSearchParams({ employee_id: id })}`;

	request.get(url, { headers: {} })
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

	employeeModal.addEventListener("click", () => closeModal());

	modal.propagationForContent();

	window.addEventListener("keydown", (event) => {
		if (
			!employeeModal.classList.contains("hidden") &&
			event.code === "Escape"
		) {
			closeModal();
		}
	});
};

export {
	openCard, renderInformation
};