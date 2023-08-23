"use strict";

import Validate from "../../classes/Validate";
import validator from "validator";

const validate = new Validate(".students__filters-checkbox");

const studentsBtnFilter = document.querySelector(".students__btn-filter");
const studentsFilters = document.querySelector(".students__filters");
const studentsFiltersForm = document.querySelector(".students__filters-form");
const studentsFiltersReset = document.querySelector(".students__filters-reset");
const studentsFiltersCheckbox = document.querySelectorAll(".students__filters-checkbox");

// Очистить фильтр
studentsFiltersReset.addEventListener("click", () => {
	studentsFiltersForm.reset();
	studentsFiltersCheckbox.forEach((checkbox) => checkbox.labels[0].classList.remove("active"));
});

// Открыть/Закрыть фильтры
studentsBtnFilter.addEventListener("click", () => {
	studentsBtnFilter.textContent = "Открыть фильтры";

	if (studentsFilters.classList.contains("hidden")) {
		studentsBtnFilter.textContent = "Закрыть фильтры";
	}

	studentsFilters.classList.toggle("hidden");
});

// Визуализация активных checkbox
studentsFiltersCheckbox.forEach((checkbox) => {
	checkbox.addEventListener("change", () => {
		checkbox.labels[0].classList.remove("active");

		if (checkbox.checked) {
			checkbox.labels[0].classList.add("active");
		}
	});
});

// Отправка данных формы
studentsFiltersForm.addEventListener("submit", (event) => {
	event.preventDefault();

	const fd = new FormData(studentsFiltersForm);
	const yearOfAdmission = fd.get("yearOfAdmission");

	// Валидация данных
	const valid = validate.init([
		{
			valid: validator.isNumeric(yearOfAdmission) && +yearOfAdmission === Math.abs(yearOfAdmission),
			message: "Год поступления должен содержать только положительные числа",
			name: "yearOfAdmission"
		}
	]);

	if (!valid) return;

	// Работа с данными фильтра
});