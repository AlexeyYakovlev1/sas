"use strict";

import Modal from "../../classes/Modal";

const modal = new Modal();

const employeesListItems = document.querySelectorAll(".employees__list li");
const employeeModalContent = document.querySelector("#employee-modal-content");
const employeeModal = document.querySelector("#employee-modal");

employeesListItems.forEach((item) => {
	item.addEventListener("dblclick", () => {
		const { id } = item.dataset;

		modal.show();

		// Получаем данные из апи по id сотрудника и рендерим их в карточке...
	});
});

employeeModal.addEventListener("click", () => modal.close());

employeeModalContent.addEventListener("click", (event) => event.stopPropagation());