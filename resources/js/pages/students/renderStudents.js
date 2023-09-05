"use strict";

import Utils from "../../classes/Utils";

import { openCard, getCardData } from "./modal";

const utils = new Utils();

utils.checkQuery("student_id");

window.addEventListener("DOMContentLoaded", () => {
	const studentsListItem = document.querySelectorAll(".students__list li");
	const studentsModal = document.querySelector("#student-modal");

	if (!studentsModal.classList.contains("hidden")) getCardData();

	openCard(studentsListItem, studentsModal);
});

function renderModalContent(data) {
	const contentName = data.data.description.toLowerCase();
	const contentParent = document.querySelector(`.card__section#${contentName}`);

	if (!contentParent) return;

	contentParent.classList.remove("hidden");

	// Тут будет рендер информации
	// contentParent.innerHTML = `
	// 	<p>${data.data.description}</p>
	// `;
}

export { renderModalContent };