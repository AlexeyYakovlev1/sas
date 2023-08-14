"use strict";

import Modal from "../../classes/Modal";

const modal = new Modal();

const studentsListItem = document.querySelectorAll(".students__list li");
const studentsModal = document.querySelector("#student-modal");

// При даблклике открываем окно с информацией
studentsListItem.forEach((item) => {
	item.addEventListener("dblclick", () => {
		const { id } = item.dataset;

		modal.show();

		// Получаем данные из апи по id студента и рендерим их в карточке...
	});
});

// При клике на задний фон скрываем окно с информацией
studentsModal.addEventListener("click", () => modal.close());

modal.propagationForContent();