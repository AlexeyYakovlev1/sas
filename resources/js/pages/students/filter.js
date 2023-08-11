const studentsBtnFilter = document.querySelector(".students__btn-filter");
const studentsFilters = document.querySelector(".students__filters");

// Открыть/Закрыть фильтры
studentsBtnFilter.addEventListener("click", () => {
	studentsBtnFilter.textContent = "Открыть фильтры";

	if (studentsFilters.classList.contains("hidden")) {
		studentsBtnFilter.textContent = "Закрыть фильтры";
	}

	studentsFilters.classList.toggle("hidden");
});

// Визуализация активных checkbox
const studentsFiltersCheckbox = document.querySelectorAll(".students__filters-checkbox");

studentsFiltersCheckbox.forEach((checkbox) => {
	checkbox.addEventListener("change", () => {
		checkbox.labels[0].classList.remove("active");

		if (checkbox.checked) {
			checkbox.labels[0].classList.add("active");
		}
	});
});

// Работа с данными фильтра
