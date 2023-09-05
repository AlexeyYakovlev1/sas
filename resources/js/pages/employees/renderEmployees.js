"use strict";

import Utils from "../../classes/Utils";

import { openCard, getCardData } from "./modal";

const utils = new Utils();

utils.checkQuery("employee_id");

window.addEventListener("DOMContentLoaded", () => {
	const employeesListItems = document.querySelectorAll(".employees__list li");
	const employeeModal = document.querySelector("#employee-modal");

	if (!employeeModal.classList.contains("hidden")) getCardData();

	openCard(employeesListItems, employeeModal);
});

function renderModalContent(data) {
	const contentName = data.data.description.toLowerCase();
	const contentParent = document.querySelector(`.card__content-item#${contentName}`);

	if (!contentParent) return;

	contentParent.classList.remove("hidden");

	// Тут будет рендер информации
	// contentParent.innerHTML = `
	// 	<p>${data.data.description}</p>
	// `;
}

export { renderModalContent };