const studentsListItem = document.querySelectorAll(".students__list li");
const studentsModal = document.querySelector(".students__modal");
const studentsCard = document.querySelector(".card");

// При даблклике открываем окно с информацией
studentsListItem.forEach((item) => {
	item.addEventListener("dblclick", () => {
		const { id } = item.dataset;

		studentsModal.classList.remove("hidden");
		document.body.style.overflow = "hidden";

		// Получаем данные из апи по id студента и рендерим их в карточке...
	});
});

// При клике на задний фон скрываем окно с информацией
studentsModal.addEventListener("click", () => {
	studentsModal.classList.add("hidden");
	document.body.style.overflow = "visible";
});

studentsCard.addEventListener("click", (event) => event.stopPropagation());