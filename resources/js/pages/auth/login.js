"use strict";

import Loader from "../../classes/Loader";
import Request from "../../classes/Request";
import Utils from "../../classes/Utils";
import Alert from "../../classes/Alert";

const loader = new Loader();
const request = new Request();
const utils = new Utils();
const alert = new Alert();

const loginForm = document.querySelector(".login__form");

loginForm.addEventListener("submit", (event) => {
	event.preventDefault();

	loader.show();

	const activeLoginCharacter = document.querySelector(".login__character.btn-active");
	const { person } = activeLoginCharacter.dataset;
	const data = { person };

	// Заносим значения инпутов в data
	document.querySelectorAll(".form__item").forEach((formItem) => {
		formItem.childNodes.forEach((child) => {
			if (child.nodeName === "INPUT") data[child.dataset.name] = child.value;
		});
	});

	// Отправляем данные
	request.post("/auth/login", { data: JSON.stringify(data), headers: { "Content-Type": "application/json" } })
		.then((data) => {
			const { success, person, message } = data;

			if (message) alert.show(success, message);

			loader.close();

			switch (person) {
				case "student":
					window.location.href = `${utils.getHost()}/home/students/list`;
					break;
				case "director":
					window.location.href = `${utils.getHost()}/home/employees`;
					break;
				case "employee":
					window.location.href = `${utils.getHost()}/home/general_information`;
					break;
			}
		})
		.catch((error) => {
			loader.close();
			alert.show(false, error.message || "Ошибка сервера");
		});
});