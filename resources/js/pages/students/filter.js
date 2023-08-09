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

// Поиск по ФИО
const studentsSearch = document.querySelector(".students__search");
const students = [
	{ first_name: "Алексей", last_name: "Яковлев", patronymic: "Николаевич" },
	{ first_name: "Виктор", last_name: "Смирнов", patronymic: "Петрович" }
];

studentsSearch.addEventListener("input", () => {
	if (studentsSearch.value.length >= 3) {
		setTimeout(() => {
			console.log(students.filter((student) => {
				const { first_name, last_name, patronymic } = student;
				const fullName = `${last_name}${first_name}${patronymic}`.toLowerCase();

				return fullName.includes(studentsSearch.value.toLowerCase().split(" ").join(""));
			}));
		}, 500);
	}
});