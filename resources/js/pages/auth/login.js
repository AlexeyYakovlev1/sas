const loginForm = document.querySelector(".login__form");

loginForm.addEventListener("submit", (event) => {
	event.preventDefault();

	const activeLoginCharacter = document.querySelector(".login__character.btn-active");
	const fd = new FormData();
	const { person } = activeLoginCharacter.dataset;

	fd["person"] = person;

	// Заносим значения инпутов в formData
	document.querySelectorAll(".form__item").forEach((formItem) => {
		formItem.childNodes.forEach((child) => {
			if (child.nodeName === "INPUT") fd[child.dataset.name] = child.value;
		});
	});

	// Отправка данных на сервер...
});