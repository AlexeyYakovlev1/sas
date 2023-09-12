const course = document.querySelectorAll(".course");

// Активный курс
course.forEach((item) => {
	item.addEventListener("click", () => {
		course.forEach((el) => el.classList.remove("active"));

		item.classList.add("active");
	});
});