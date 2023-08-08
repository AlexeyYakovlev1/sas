import Loader from "../../classes/Loader";
import Request from "../../classes/Request";

const loader = new Loader();
const request = new Request();

const loginForm = document.querySelector(".login__form");

loginForm.addEventListener("submit", (event) => {
	event.preventDefault();

	loader.show();

	const activeLoginCharacter = document.querySelector(".login__character.btn-active");
	const { person } = activeLoginCharacter.dataset;
	const data = { person };

	// Заносим значения инпутов в formData
	document.querySelectorAll(".form__item").forEach((formItem) => {
		formItem.childNodes.forEach((child) => {
			if (child.nodeName === "INPUT") data[child.dataset.name] = child.value;
		});
	});

	// Отправляем данные
	request.post("/auth/login", { data: JSON.stringify(data) })
		.then((data) => {
			loader.close();

			window.location.href = "http://127.0.0.1:8000/home/general_information";
		})
		.catch((error) => {
			loader.close();
			console.error(error.message);
		});
});